<?php
	/*REGISTER*/
	session_start();
	$firstname = $lastname = $section = $stud_num = $password = $confirmpassword = $address = $role = $image = "";
	$errors = array();
	$_SESSION['message'] = "";
	
	//Database connection
	$con = mysqli_connect('localhost','root','','accounts');

	//If the register button is clicked
	if(isset($_POST['register']))
	{
		$firstname = mysqli_real_escape_string($con, $_POST['stud_name']);
		$lastname = mysqli_real_escape_string($con, $_POST['stud_lastname']);
		$email = mysqli_real_escape_string($con, $_POST['email']);
		$section = mysqli_real_escape_string($con, $_POST['stud_sec']);
		$stud_num = mysqli_real_escape_string($con, $_POST['stud_studno']);
		$password = mysqli_real_escape_string($con, $_POST['password']);
		$confirmpassword = mysqli_real_escape_string($con, $_POST['confirmpassword']);
		$address = mysqli_real_escape_string($con, $_POST['address']);
		$image = mysqli_real_escape_string($con, 'images/profile_pic/' . $_FILES['image']['name']);
		$role = 'User';

		//Prevent multiple entries in the db
		$verify = mysqli_query($con, "SELECT * FROM user_accounts WHERE student_num='$stud_num' AND email='$email'");

		//Validation
		if(mysqli_num_rows($verify) > 0)
		{
			array_push($errors, 'The student number and email already exists!');
		}
		else
		{
			if(empty($firstname))
			{
				array_push($errors, 'Your first name is required!');
			}
			if(empty($lastname))
			{
				array_push($errors, 'Your last name is required!');
			}
			if(empty($email))
			{
				array_push($errors, 'Your email is required!');
			}
			if(empty($address))
			{
				array_push($errors, 'Your address is required!');
			}
			if(empty($section))
			{
				array_push($errors, 'Your section is required!');
			}
			if(empty($stud_num))
			{
				array_push($errors, 'Your student number is required!');
			}
			if(empty($password) || empty($confirmpassword))
			{
				array_push($errors, 'Your password is required!');
			}
			if($password != $confirmpassword)
			{
				array_push($errors, 'The passwords does not match!');
			}
			if(preg_match("!image!",$_FILES['image']['type']) == false)
			{
				array_push($errors, 'Please, Only Upload GIF, PNG, and JPEG Images');
			}

			if(copy($_FILES['image']['tmp_name'], $image) == false)
			{
				array_push($errors, 'File Upload Failed');
			}
		}
	

		//if there are no errors, save into the database
		if(count($errors) == 0)
		{
			$password = md5($password);
			$sql = "INSERT INTO user_accounts(first_name, last_name, email, section, student_num, password, role, address, image) VALUES ('$firstname', '$lastname', '$email', '$section', '$stud_num', '$password', '$role', '$address','$image')";

			$mysql = mysqli_query($con, $sql);

			if($mysql == true)
			{
				$_SESSION['message'] = '<div class="success">User registered!</div>';
				header('location: welcome.php?login=success!');
			}
			else
			{
				header('location: login.php?signup=failed');
			}
		}
	}

	/*LOGIN*/
	if(isset($_POST['login']))
	{
		$email = mysqli_real_escape_string($con, $_POST['login_email']);
		$password = mysqli_real_escape_string($con, $_POST['login_password']);

		if(empty($email))
		{
			array_push($errors, '<center>Enter your Email Address</center>');
		}
		if(empty($password))
		{
			array_push($errors, '<center>Enter your Password</center>');
		}
		if(count($errors) == 0)
		{
			$password = md5($password);
			$query = "SELECT * FROM user_accounts WHERE email='$email' and password='$password'";
			$result = mysqli_query($con, $query);

			if(mysqli_num_rows($result) > 0)
			{ //login successful
				session_regenerate_id();
				$member = mysqli_fetch_assoc($result);
				$_SESSION['id'] = $member['id'];
				$_SESSION['firstname'] = $member['first_name'];
				$_SESSION['lastname'] = $member['last_name'];
				$_SESSION['section'] = $member['section'];
				$_SESSION['snum'] = $member['student_num'];
				$_SESSION['role'] = $member['role'];
				$_SESSION['address'] = $member['address'];
				$_SESSION['email'] = $member['email'];
				$_SESSION['image'] = $member['image'];
				session_write_close();
				header("location: welcome.php?login=success");
				exit();
			}
			else
			{
				$_SESSION['message'] = "<div class='error'>Invalid Email and Password!</div>";
			}
		}
	}
?>