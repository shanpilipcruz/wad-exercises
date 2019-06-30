<?php
	include('server.php');

	if($_SESSION['role'] == "User" || $_SESSION['role'] == 'user') 
	{
		header('location: welcome.php?page=supermarket');
	}
	else if($_SESSION['role'] == "Admin" || $_SESSION['role'] == 'admin')
	{
		header('location: home_smadmin.php');
	}
	else
	{
		array_push($errors, '<center>Error#0001: Your user privilige is invalid! please contact web admin</center>');
	}
?>	