<center>
	<div class="panel panel-primary" style="width: 56%;">
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
			<br>
			<?php include('computations.php');?>
		</div>
	</div>
</center>