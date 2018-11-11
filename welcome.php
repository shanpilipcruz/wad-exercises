<?php
 	include('server.php');

 	if(empty($_SESSION['firstname']))
 	{
		header('location: index.php');
 	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Wad Exercises 2k17-2k18</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap-3.3.7-dist/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="ajax.js"></script>

 	<link rel="stylesheet" type="text/css" href="styles.css">
 	<link rel="stylesheet" type="text/css" href="sidebar_styles.css">
</head>
<?php include('update_user.php'); ?>
<?= $_SESSION['message'] ?>
<body background="img/bg.jpg">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div id="dismiss" class="pull-left">
                    <i class="glyphicon glyphicon-arrow-left"></i>
                </div>

                <div class="sidebar-header">
                    <h3 style="text-align: center;color: #fff">Profile</h3>
                </div>

                <ul class="list-unstyled components">
                    <center>
                    <li><img class="img-responsive img-rounded" src="<?php echo $_SESSION['image']; ?>" width="140px" height="110px" alt="profile_picture"/></li>
                	</center>
                	<br>
                    <li style="color: white;"><b>Name:</b> <?php echo $_SESSION['firstname'] . " " . $_SESSION['lastname']; ?></li>
                    <li style="color: white;"><b>Address:</b> <?php echo $_SESSION['address']; ?></li>
                    <li style="color: white;"><b>Email:</b> <?php echo $_SESSION['email']; ?></li>
                    <li style="color: white;"><b>Section:</b> <?php echo $_SESSION['section']; ?></li>
                    <li style="color: white;"><b>Student Number:</b> <?php echo $_SESSION['snum']; ?></li>
                    <li style="color: white;"><b>Rights:</b> <?php echo $_SESSION['role']; ?></li>
                </ul>
				<p class="pull-left" style="color: white;">Do you want changes into your profile?&nbsp;<a href="#" data-target="#devModal" data-toggle="modal" data-dismiss="modal">Edit</a></p>
            </nav>
        <!-- jQuery Custom Scroller CDN -->
        <script src="bootstrap-3.3.7-dist/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<div class="overlay"></div>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#sidebar").mCustomScrollbar({
                    theme: "minimal"
                });

                $('#dismiss').on('click', function () {
                    $('#sidebar').removeClass('active');
                    $('.overlay').fadeOut();
                });

                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').addClass('active');
                    $('.overlay').fadeIn();
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });
            });
        </script>
	   <?php include('default.php'); ?>
</body>
</html>
