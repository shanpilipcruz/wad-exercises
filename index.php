<?php
	session_start();
	$user_data = $query = $result = "";
	$con = mysqli_connect('localhost','root','','school_projects');

	$query = "SELECT * FROM accounts WHERE id='1'";
	$result = mysqli_query($con, $query);

	session_regenerate_id();
	$user_data = mysqli_fetch_assoc($result);
	$_SESSION['firstname'] = $user_data['first_name'];
	$_SESSION['lastname'] = $user_data['last_name'];
	$_SESSION['email'] = $user_data['email'];
	$_SESSION['section'] = $user_data['section'];
	$_SESSION['snum'] = $user_data['student_num'];
	$_SESSION['image'] = $user_data['image'];
	$_SESSION['role'] = $user_data['role'];	
	session_write_close();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Practice Temp</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

	<link rel="stylesheet" type="text/css" href="Bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body background="img/bg.jpg">
<?php include('modals.php');?>
<!-- NAVBAR -->
	<nav class="navbar navbar-inverse navbar-fixed">
	    <div class="container">
	        <!-- Brand and toggle get grouped for better mobile display -->
	        <div class="navbar-header">
				<a id="styleCollapse" class="btn btn-default navbar-inverse navbar-brand"><i class="glyphicon glyphicon-align-justify"></i></a>
	            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
	                <span class="sr-only">Toggle navigation</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	            </button>
	            <a href="index.php" class="navbar-brand" title="Refresh the website">Practice Temp</a>
	        </div>
	        <!-- Collection of nav links and other content for toggling -->
	        <div id="navbarCollapse" class="collapse navbar-collapse navbar-right">
	            <ul class="nav navbar-nav">
	                <li><a href="/websites/wad-exercises/" title="Back to the homepage or refresh the website">Home</a></li>
	                <li class="dropdown">
	                	<a href="" class="dropdown-toggle" data-toggle="dropdown" title="Check all available exercises">Exercises<b class="caret"></b></a>
	                	<ul class="dropdown-menu">
			                <li><a href="index.php?exer=exercise1">Exercise 1</a></li>
			                <li><a href="index.php?exer=exercise2">Exercise 2</a></li>
			                <li><a href="" data-toggle="modal" data-target="#lockedModal">Exercise 3</a></li>
			                <li><a href="" data-toggle="modal" data-target="#lockedModal">Exercise 4</a></li>
			                <li><a href="" data-toggle="modal" data-target="#lockedModal">Exercise 5</a></li>
	                	</ul>
	                </li>
	                <li><a href="#" data-toggle="modal" data-target="#lockedModal" title="Visit and Grab your favorite treats">Supermarket</a></li>
	                <li><a href="login.php" title="Login if you are already a registered user">Login</a></li>
	            </ul>
	        </div>
	    </div>
	</nav>
<div class="wrapper">
	<?php include('profile.php'); ?>

	<div class="content">
		<div class="container-fluid">
				<?php include('exercises_no_user.php'); ?>
		</div>
	</div>

<div id="lockedModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<center><p>Locked Content</p></center>
			</div>
			<div class="modal-body">
				<center>Do you want a personalized profile? Unlock all the features of the website? Subscribe first and <b>Login</b>
					<br>
					<br>
				<a href="login.php" class="btn btn-default">Subscribe &amp; Login</a>
				</center>
			</div>
			<div class="modal-footer">
				<button type="close" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>

	</div>
</div>
</div>

<script type="text/javascript">
	$(document).ready(function () 
	{
		$('#style').mCustomScrollbar({ theme: "minimal" });
		$('#styleCollapse').on('click', function () 
		{
			$('#style, #content').toggleClass('active');
			$('.collapse.in').toggleClass('in');
			$('a[aria-expanded=true]').attr('aria-expanded','false');
		});
	});
</script>
<script type="text/javascript" src="Bootstrap-3.3.7-dist/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="bootstrap-3.3.7-dist/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="ajax.js"></script>
</body>
</html>