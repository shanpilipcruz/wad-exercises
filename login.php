<?php 
	include('server.php'); 
	include('modals.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<meta charset="utf-8"> 

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">

	<script type="text/javascript" src="bootstrap-3.3.7-dist/js/jquery-3.1.1.min.js"></script>

	<script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

</head>
<body background="img/bg.jpg">
<nav class="navbar navbar-inverse navbar-static" style="border-radius: 5px;">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="index.php" class="navbar-brand" title="Go back to the index">Personal Website</a>
    </div>
    <!-- Collection of nav links and other content for toggling -->
    <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
		    <li><a href="" data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in">&nbsp;</span>Login</a></li>
		    &nbsp;
			<li><a href="" data-toggle="modal" data-target="#regModal"><span class="glyphicon glyphicon-user">&nbsp;</span>Register</a></li>
        </ul>
    </div>
</nav>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<link rel="stylesheet" type="text/css" href="styles.css">
				<?php include('errors.php'); ?>
				<?= $_SESSION['message'] ?>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h1><center>Welcome to Web Application Design 2 Website</center></h1>
			<ul>
				<center><img src="img\bt.png" style="height: 150px; width: 135px;">&nbsp;&nbsp;&nbsp;<strong style="font-size: 20px;">Brain Exercises</strong></center>
				<br>
				<center><img src="img\cc.png" style="height: 150px; width: 150px;">&nbsp;&nbsp;&nbsp;<strong style="font-size: 20px;">Connect with People</strong></center>
				<br>
				<center><img src="img\sm.png" style="height: 150px; width: 150px;">&nbsp;&nbsp;&nbsp;<strong style="font-size: 20px;">Online Supermarket</strong></center>
				<br>
			</ul>
		</div>
	</div>
</div>
</body>
</html>