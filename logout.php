<?php
	session_start();
	session_destroy();
	$_SESSION['message'] = 'You have successfully logged out!';
	header('location: login.php');
?>