<center>
	<nav id="style">
		<div class="modal-content" style="height: 85%; background-color: #222; color: #fff; width: 350px;">
			<div class="modal-header">
				<h4 class="panel-title">Owner Information</h4>
			</div>
				<div class="panel-body">
					<img class="img-responsive img-thumbnail" src="<?php echo $_SESSION['image']; ?>" height="110px" width="150px" alt="Owner profile picture">
					<br>
					<br>
					<p><b>Name:</b> <?php echo $_SESSION['firstname'] . " " . $_SESSION['lastname']; ?></p>
					<p><b>Email:</b> <?php echo $_SESSION['email']; ?></p>
					<p><b>Section:</b> <?php echo $_SESSION['section']; ?></p>
					<p><b>Student Number:</b> <?php echo $_SESSION['snum']; ?></p>
					</p>
					<br>
					<p>Click Options for more</p>
					<a href="" data-target="#optionModal" data-toggle="modal" class="btn btn-primary">Options</a><br>
					<br>
					<a href="/websites/wad-exercises/" class="btn btn-default">Exercises</a>
					<a href="" class="btn btn-default" data-toggle="modal" data-target="#lockedModal">Zodiac Sign</a>  
				</div>
		</div>
	</nav>
</center>