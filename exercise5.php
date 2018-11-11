<?php

?>
<form method="POST" action="<?php htmlspecialchars("PHP_SELF"); ?>">
	<h2 style="text-align: center; font-size: 20px; text-align: center;"><font color="black">Hypothetically speaking, on Mars, 100-pound person on earth would weigh 38-pounds, On jupiter, the same person weights 264 pounds. Write a program that will input the weight of the person in pounds on Earth and displays the corresponding weight when the Man is on Mars and on Jupiter.</font></p>

	<center>
		<div class="form-group"><h2 style="text-align: center; font-size: 20px; text-align: center;"><font color="black">Enter how many pound a person on earth is: </font> <input type="number" name="earth" autocomplete="off" min="0.00" max="9999999" required value="<?php echo $earth ?>"></font></h2>
		</div>
	</center>
	<center>
		<button type="submit" name="exercise5" value="submit" class="btn btn-primary btn-block" style="width: 200px;">Compute</button>
	</center>
</form>