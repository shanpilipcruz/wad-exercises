<?php
	include('server.php');

	if($_SESSION['role'] == 'User')
	{
		$_SESSION['message'] = 'Invalid user previliges!';
		header('location: welcome.php?page=supermarket');
	}

	$items_connection = mysqli_connect('localhost','root','','supermarket');
	$supermarket_query = "SELECT * FROM products";
	$query_result = mysqli_query($items_connection, $supermarket_query);

	if(mysqli_num_rows($query_result) > 0)
	{
		session_regenerate_id();
		$items = mysqli_fetch_assoc($query_result);
		$_SESSION['prod_id'] = $items['id'];
		$_SESSION['prod_name'] = $items['p_name'];
		$_SESSION['prod_price'] = $items['price'];
		session_write_close();
	}

	include('supermarket_update.php');
	include('supermarket_con.php');
	include('modals.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Administrator</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap-3.3.7-dist/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body background="img/bg2.jpg">
	<nav class="navbar navbar-default navbar-fixed">
	    <div class="container">
	        <!-- Brand and toggle get grouped for better mobile display -->
	        <div class="navbar-header">
	            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
	                <span class="sr-only">Toggle navigation</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	            </button>
	            <a href="home_smadmin.php" class="navbar-brand">Supermarket Administrator</a>
	        </div>
	        <!-- Collection of nav links and other content for toggling -->
	        <div id="navbarCollapse" class="collapse navbar-collapse">
	            <ul class="nav navbar-nav navbar-right">
	                <li class="active"><a href="home_smadmin.php">Home</a></li>
	                <li><a href="welcome.php?page=supermarket">Supermarket</a></li>
	                <li class="dropdown">
	                	<a href="" class="dropdown-toggle" data-toggle="dropdown">Profile<b class="caret"></b></a>
	                	<ul class="dropdown-menu">
	                		<li><a href="" data-toggle="modal" data-target="#profileModal">User Settings</a></li>
	                		<li class="divider"></li>
	                		<li><a href="logout.php">Logout</a></li>
	                	</ul>
	                </li>
	            </ul>
	        </div>
	    </div>
	</nav>
	<?= $_SESSION['message'] ?>
	<br>
	<div class="container">
	  <div class="jumbotron" style="align-content: center; background-image: url('img/smbg3.jpg');">
	    <h1 style="color: black;"><b>Supermarket</b></h1> 
	    <p style="color: black;"><b>Grab your favorite sweets here at the Supermarket</b></p> 
	  </div>
	  	<h3 style="color: black;"><b>Welcome Admin! You can add Items here!</b></h3>
	<center>	
	  	<div class="panel panel-primary" style="width: 600px;">
	  		<div class="panel-heading">
	  			<h3>Add some items here</h3>
	  		</div>
	  		<div class="panel-body">
				  	<form method="POST" action="" enctype="multipart/form-data">
						<div class="input-group input-group">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-font"></span>
							</span>
								<input class="form-control" type="text" name="itm_name" autocomplete="off" id="itm_name" placeholder="Item Name" autofocus>
						</div>
						<div class="input-group input-group">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-usd"></span>
							</span>
								<input class="form-control" type="text" name="itm_price" autocomplete="off" id="itm_price" placeholder="Item Price">
						</div>
						<div class="input-group input-group">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-file"></span>
							</span>
								<input class="form-control" type="file" name="prodimage" autocomplete="off" id="prodimage">
						</div>
						<br>
						<button type="submit" class="btn btn-primary pull-left" name="add">Add</button>
						<br><br>
						<a href="#" data-toggle="modal" data-target="#itemsModal" class="btn btn-primary pull-left">Items</a>
				  	</form>
	  		</div>
	  	</div>
	</center>
	</div>
<div id="itemsModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<br>
				<h3 class="modal-title"><b>Items in the Database</b></h3>
			</div>
			<div class="modal-body">
				<?php 
					$connect = mysqli_connect('localhost','root','1234','supermarket');
					$results = mysqli_query($connect, "SELECT * FROM products");
				?>
					<table class="table table-responsive table-hover">
						<thead>
							<tr>
								<th>id</th>
								<th>Product Name</th>
								<th>Product Price</th>
								<th colspan="2">Action</th>
							</tr>
						</thead>

						<?php while ($row = mysqli_fetch_array($results)) { ?>
							<tr>
								<td><?php echo $row['id']; ?></td>
								<td><?php echo $row['p_name']; ?></td>
								<td><?php echo $row['price']; ?></td>

								<td>
									<a href="#devModal" class="btn btn-info editData" data-toggle="modal" data-dismiss="modal">Edit</a>
								</td>
								<td>
									<a href="#devModal" data-toggle="modal" data-dismiss="modal" class="btn btn-danger DeleteData">Delete</a>
								</td>
							</tr>
						<?php } ?>
					</table>
			</div>
			<div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
			</div>
		</div>
	</div>
</div>
<div id="editModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" data-trigger="#itemsModal">&times;</button>
				<br>
				<h3 class="modal-title">Edit</h3>
			</div>
			<div class="modal-body">
				<form method="POST" action="">
						<input type="hidden" name="id" value="<?php echo $_SESSION['prod_id']; ?>">
					<label for="update_p_name" class="label label-default">Name:</label>
						<input type="text" name="update_p_name" class="form-control" value="<?php echo $_SESSION['prod_name']; ?>">
					<label for="update_price" class="label label-default">Price:</label>
						<input type="text" name="update_price" class="form-control" value="<?php echo $_SESSION['prod_price']; ?>">
					<br>
					<button type="submit" name="update_product" class="btn btn-default">Update</button>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
</body>
</html>