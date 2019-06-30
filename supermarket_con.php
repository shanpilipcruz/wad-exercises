<?php
	$sm = mysqli_connect('localhost','root','','school_projects');
	$item_name = $item_price = $item_image = "";
	$_SESSION['message'] = '';

	if(isset($_POST['add']))
	{
		$item_name = mysqli_real_escape_string($sm, $_POST['itm_name']);
		$item_price = mysqli_real_escape_string($sm, $_POST['itm_price']);
		$item_image = mysqli_real_escape_string($sm, 'images/supermarket/' . $_FILES['prodimage']['name']);

		if(preg_match("!image!",$_FILES['prodimage']['type']) == false)
		{
			array_push($errors, 'Please, Only Upload GIF, PNG, and JPEG Images');
		}

		if(copy($_FILES['prodimage']['tmp_name'], $item_image) == false)
		{
			array_push($errors, 'File Upload Failed');
		}

		if(count($errors) == 0)
		{
			$sql = "INSERT INTO supermarket (p_name, image, price) VALUES ('$item_name','$item_image','$item_price')";

			$save = mysqli_query($sm, $sql);
			if($save == true)
			{
				$_SESSION['message'] = '<div class="alert alert-success">Item successfully added to the database!</div>';
			}
			else
			{
				$_SESSION['message'] = '<div class="alert alert-danger">Failed to add item to the database!</div>';
			}
		} else {
			$_SESSION['message'] = '<div class="alert alert-danger">Failed to add item to the database!</div>';
		}
	}
?>