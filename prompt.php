<?php
	include('server.php');

	if($_SESSION['role'] == "User")
	{
		header('location: welcome.php?page=supermarket');
	}
	else if($_SESSION['role'] == "Admin")
	{
		header('location: home_smadmin.php');
	}
	else
	{
		array_push($errors, '<center>Error#0001: Your user privilige is invalid! please contact web admin</center>');
	}
?>	