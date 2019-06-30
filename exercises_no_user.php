<center>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				
			</div>
			<div class="col-md-8">
				<div class="panel panel-primary">
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
			</div>
		</div>
	</div>
</center>