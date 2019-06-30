<?php
	/*REGISTER*/
	session_start();
	$firstname = $lastname = $section = $stud_num = $password = $confirmpassword = $address = $role = $image = "";
	$errors = array();
	$_SESSION['message'] = "";
	
	//Database connection
	$con = mysqli_connect('localhost','root','','school_projects');

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
		$verify = mysqli_query($con, "SELECT * FROM accounts WHERE student_num='$stud_num' AND email='$email'");

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
			$sql = "INSERT INTO accounts(first_name, last_name, email, section, student_num, password, role, address, image) VALUES ('$firstname', '$lastname', '$email', '$section', '$stud_num', '$password', '$role', '$address','$image')";

			$mysql = mysqli_query($con, $sql);

			if($mysql == true)
			{
				$_SESSION['message'] = '<div class="success">User registered!</div>';
				header('location: welcome.php?login=success!');
			}
			else
			{
				$_SESSION['message'] = '<div class="danger">User Registration Failed!</div>';
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
			$query = "SELECT * FROM accounts WHERE email='$email' and password='$password'";
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

	if(isset($_POST['upload']))
	{
		$user_id = mysqli_real_escape_string($con, $_POST['id']);
		$updated_image = mysqli_real_escape_string($con, 'images/profile_pic/' . $_FILES['image']['name']);

		if(preg_match("!image!",$_FILES['image']['type']))
		{
			if(copy($_FILES['image']['tmp_name'], $updated_image))
			{
				$uploadImage = "INSERT INTO accounts (image) VALUES ('$updated_image')";

				if(mysqli_query($con, $uploadImage) == true){
					$selectImage = "SELECT image from users WHERE id='$user_id';";
					$res = mysqli_query($con, $selectImage);
					if(mysqli_num_rows($res) > 0)
					{
						session_regenerate_id();
						$image = mysqli_fetch_assoc($res);
						$_SESSION['id'] = $image['id'];
						$_SESSION['image'] = $image['image'];
						session_write_close();
						header("location: update_user.php?upload=success");
						echo "Image has been successfully changed!";
						exit();
					}
				}
			} else {
				echo "File Upload Failed, Refer to this error";
			}
		} else {
			echo "Please, Only Upload GIF, PNG, and JPEG Images. Please refer to this error";
		}
	}

	// update
	if(isset($_POST['update']))
	{
		$updated_firstname = mysqli_real_escape_string($con, $_POST['updated_stud_name']);
		$updated_lastname = mysqli_real_escape_string($con, $_POST['updated_stud_lastname']);
		$updated_email = mysqli_real_escape_string($con, $_POST['updated_email']);
		$updated_address = mysqli_real_escape_string($con, $_POST['updated_address']);
		$updated_section = mysqli_real_escape_string($con, $_POST['updated_stud_sec']);
		$updated_student_number = mysqli_real_escape_string($con, $_POST['updated_stud_studno']);
	}
?>