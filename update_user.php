<?php 
	include('server.php');
	if(empty($_SESSION['firstname'])){
		header('location: index.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Practice Temp</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<script type="text/javascript" src="bootstrap-3.3.7-dist/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="croppie.js"></script>
	<script type="text/javascript" src="uploadImage.js"></script>
	<script type="text/javascript" src="ajax.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
 	<link rel="stylesheet" type="text/css" href="styles.css">
 	<link rel="stylesheet" type="text/css" href="sidebar_styles.css">
 	<link rel="stylesheet" type="text/css" href="croppie.css">
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed">
	    <div class="container">
	        <!-- Brand and toggle get grouped for better mobile display -->
	        <div class="navbar-header">
	            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
	                <span class="sr-only">Toggle navigation</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	            </button>
	            <a href="welcome.php" class="navbar-brand">Practice Temp</a>
	        </div>
	        <!-- Collection of nav links and other content for toggling -->
	        <div id="navbarCollapse" class="collapse navbar-collapse">
	            <ul class="nav navbar-nav navbar-right">
	                <li><a href="welcome.php">Home</a></li>
<!-- 	                <li class="dropdown">
	                	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Exercises<b class="caret"></b></a>
	                	<ul class="dropdown-menu">
			                <li><a href="welcome.php?exer=exercise1">Exercise 1</a></li>
			                <li><a href="welcome.php?exer=exercise2">Exercise 2</a></li>
			                <li><a href="welcome.php?exer=exercise3">Exercise 3</a></li>
			                <li><a href="welcome.php?exer=exercise4">Exercise 4</a></li>
			                <li><a href="welcome.php?exer=exercise5">Exercise 5</a></li>
	                	</ul>
	                </li>
	                <li><a href="welcome.php?page=zodiac_sign">Zodiac Sign</a></li> -->
	                <li><a href="prompt.php">Supermarket</a></li>
	                <li><a href="logout.php">Logout</a></li>
	            </ul>
	        </div>
	    </div>
	</nav>
	<!-- END OF NAVBAR -->
	<div class="container">
		<div id="feedback"></div>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="modal-title">Update Profile</h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-4">
						<center>
							<div id="message"></div>
							<div id="userImage">
								<img src="<?php echo$_SESSION['image']; ?>" class="img-thumbnail">
							</div>
						</center>
						<br>
							<form id="profilePictureForm" method="post" action="" enctype="multipart/form-data">
								<div class="input-group input-group">
									<span class="input-group-addon">
										<span class="glyphicon glyphicon-file"></span>
									</span>
									<input type="file" class="form-control" name="updated_image" id="updated_image">
									<input type="hidden" name="id" id="id" value="<?php echo $_SESSION['id']; ?>">
								</div>
						<br>
						<center>
							<button type="submit" class="btn btn-primary" id="upload" name="upload">Upload</button>
							</form>
						</center>
					</div>
					<div class="col-md-8">
						<br>
						<form method="POST" action="">
							<input type="hidden" name="user_id" id="user_id" value="<?php echo $_SESSION['id']; ?>">
							<div class="input-group input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-font"></span>
								</span>
								<input class="form-control" type="text" name="updated_stud_name" autocomplete="off" id="updated_stud_name" placeholder="First Name" autofocus value="<?php echo $_SESSION['firstname'];?>">
								<input class="form-control" type="text" name="updated_stud_lastname" autocomplete="off" id="updated_stud_lastname" placeholder="Last Name" value="<?php echo $_SESSION['lastname'];?>">
							</div>
							<br>

							<div class="input-group input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-home"></span>
								</span>
								<input class="form-control" type="text" name="updated_address" autocomplete="off" id="updated_address" placeholder="Address" value="<?php echo $_SESSION['address']; ?>">
							</div>

							<div class="input-group input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-envelope"></span>
								</span>
								<input class="form-control" type="text" name="updated_email" autocomplete="off" id="updated_email" placeholder="Email" value="<?php echo $_SESSION['email']; ?>">
							</div>

							<div class="input-group input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-briefcase"></span>
								</span>
								<input class="form-control" type="text" name="updated_stud_sec" autocomplete="off" id="updated_stud_sec" placeholder="Your Section" value="<?php echo $_SESSION['section']; ?>">
							</div>

							<div class="input-group input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-paperclip"></span>
								</span>
								<input class="form-control" type="text" name="updated_stud_studno" autocomplete="off" id="updated_stud_studno" placeholder="Your Student Number" value="<?php echo $_SESSION['snum']; ?>">
							</div>
							<br>
						</form>
					</div>
				</div>
			</div>
			<div class="panel-footer">
				<button type="submit" name="register" value="register" class="btn btn-primary" id="register">Save Changes</button>
				<a href="#" type="button"  data-toggle="modal" data-target="#passwordModal" class="btn btn-primary">Change Password</a>
				<a href="welcome.php" type="button" style="float: right;" class="btn btn-primary">Back</a>
			</div>
		</div>
	</div>
	<?php include('modals.php'); ?>
</body>
</html>
