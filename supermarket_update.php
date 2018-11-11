<?php
	$update_con = mysqli_connect('localhost','root','','supermarket');

	if(isset($_POST['update_product']))
	{
		$id = mysqli_real_escape_string($update_con, $_POST['id']);
		$name = mysqli_real_escape_string($update_con, $_POST['update_p_name']);
		$price = mysqli_real_escape_string($update_con, $_POST['update_price']);

		if(empty($name))
		{
			array_push($errors, 'Product name must be specified!');
		}
		if(empty($price))
		{
			array_push($errors, 'Product price must be specified!');
		}

		$verifyquery = mysqli_query($update_con, "UPDATE products SET p_name='$name', price='$price' WHERE id='$id'");

		if($verifyquery == true)
		{
			$_SESSION['message'] = '<div class="success">Item update success!</div>';
			header('location: home_smadmin.php?edit=success!');
		}
		else
		{
			$_SESSION['message'] = '<div class="error">Item update failed!</div>';
		}
	}
?>