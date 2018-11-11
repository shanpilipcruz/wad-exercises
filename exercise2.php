<form method="POST" action="<?php htmlspecialchars("PHP_SELF"); ?>">
	<h2 style="text-align: center; font-size: 20px; text-align: center;"><font color="black">Prepare a program that converts hours to minutes only. A typical conversion should write a message <br> 3 hours is equal to 180 minutes.</font></p>

	<h2><font color="black"><label class="form-group">Enter Hours:</label></font> <input class="form-control" type="number" name="hours" autocomplete="off" min="0" max="9999999" required value="<?php echo $hours ?>" style="width: 200px;"></font></h2>
	<center><button type="submit" value="Submit" name="exercise2" class="btn btn-primary btn-block" style="width: 200px;">Compute</button></center>
</form>