<form method="POST" action="<?php htmlspecialchars("PHP_SELF"); ?>">
	<h2 style="text-align: center; font-size: 20px; text-align: center;"><font color="black">The volume of a rectangular box is given by the formula v = length * width * height. Design a program that will calculate and display the volume of the box whose dimensions are specified by the user.</font></p></h2>
	<h4><font color="black"><label class="form-group">Length:</label></font><input class="form-control" type="number" name="length" autocomplete="off" min="0" max="9999999" required value="<?php echo $length ?>" style="width: 200px;"></h4>
	<h4><font color="black"><label class="form-group">Width:</label></font><input class="form-control" type="number" name="width" autocomplete="off" min="0" max="9999999" required value="<?php echo $width ?>" style="width: 200px;"></h4>
	<h4><font color="black"><label class="form-group">Height:</label></font><input class="form-control" type="number" name="height" autocomplete="off" min="0" max="9999999" required value="<?php echo $height ?>" style="width: 200px;"></h4>
	<center>
		<button type="submit" value="Submit" name="exercise1" class="btn btn-primary btn-block" style="width: 300px;">Compute</button></center>
</form>