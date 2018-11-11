<div class="jumbotron" style="background-image: url('img/jb.png'); background-repeat: no-repeat;color: white;"><h2><center><b>Welcome to the Home page!</b></center></h2></div>
<center>
	<div class="panel panel-primary" style="width: 60%;">
		<div class="panel-heading">
			<h4><center>Exercises</center></h4>
		</div>
			<div class="panel-body">
				    <?php
				        if(isset($_GET['exer']))
				        {
				            $page=$_GET['exer'];
				            $display=$page . ".php";
				            include($display);
				        }
				        else
				        {
				            include('exercise1.php');
				        }
				    ?>
			</div>
		<?php include('computations.php'); ?>
	</div>
</center>