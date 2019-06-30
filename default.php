<?php include('modals.php');?>
<!-- NAVBAR -->
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
	                <li class="active"><a href="welcome.php">Home</a></li>
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
	                <li class="dropdown">
	                	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b></a>
	                	<ul class="dropdown-menu">
	                		<li><a href="update_user.php">User Profile</a></li>
	                		<li><a href="logout.php">Logout</a></li>
	                	</ul>
	                </li>
	            </ul>
	        </div>
	    </div>
	</nav>
<!-- END OF NAVBAR -->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
			<div class="panel panel-primary">
				<a href="#" data-toggle="modal" data-target="#profileModal">
					<div class="panel-body" style="background-color: #fff;">
						<div class="row">
							<div class="col-md-4">
								<img src="<?php echo $_SESSION['image']; ?>" height="35px" width="40px" alt="profile_picture">
							</div>
							<div class="col-md-8">
								<p style="color: black;"><?php echo $_SESSION['firstname'] . " " . $_SESSION['lastname']; ?></p>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="panel panel-default" style="background-color: #222;">
				<br>
					<center>
						<a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Activities
							<ul class="collapse list-unstyled" id="homeSubmenu">
									<br>
										<li><a href="welcome.php?exer=exercise1">Exercise 1</a></li>
									<br>
										<li><a href="welcome.php?exer=exercise2">Exercise 2</a></li>
									<br>
										<li><a href="welcome.php?exer=exercise3">Exercise 3</a></li>
									<br>
										<li><a href="welcome.php?exer=exercise4">Exercise 4</a></li>
									<br>
										<li><a href="welcome.php?exer=exercise5">Exercise 5</a></li>
									<br>
								<li><a href="welcome.php?page=zodiac_sign">Zodiac Sign</a></li>
							</ul>
						</a>
					</center>
				<br>
			</div>
			<div class="panel panel-default" style="background-color: #222;">
				<br>
					<center>
						<a href="welcome.php?page=supermarket">Supermarket</a>
					</center>
				<br>
			</div>
		</div>
		<div class="col-md-9">
			<?php include('errors.php'); ?>
				    <?php
				        if(isset($_GET['page']))
				        {
				            $page=$_GET['page'];
				            $display=$page . ".php";
				            include($display);
				        }
				        else
				        {
				            include('exercises.php');
				        }
				    ?>
		</div>
	</div>
</div>