<?php
	error_reporting(0);
?>
<form method="POST" action="<?php htmlspecialchars("PHP_SELF"); ?>">
	<h2 style="text-align: center; font-size: 20px; text-align: center;"><font color="black">Consider three numbers, A, B, C. Write a program that will compute and display their sum, difference, product, quotients and the sum of their squares.</font></p>

	<h2 style="text-align: center; font-size: 20px; text-align: center;"><font color="black">Enter the value of A:</font> <input type="number" name="A" autocomplete="off" min="0" max="9999999" required value="<?php echo $A ?>"></font></h2>
	<h2 style="text-align: center; font-size: 20px; text-align: center;"><font color="black">Enter the value of B:</font> <input type="number" name="B" autocomplete="off" min="0" max="9999999" required value="<?php echo $B ?>"></font></h2>
	<h2 style="text-align: center; font-size: 20px; text-align: center;"><font color="black">Enter the value of C:</font> <input type="number" name="C" autocomplete="off" min="0" max="9999999" required value="<?php echo $C ?>"></font></h2>
	<center><button type="submit" value="Submit" name="exercise3" class="btn btn-primary btn-block" style="width: 200px;">Compute</button></center>
</form>