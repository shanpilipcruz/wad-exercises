<form method="POST" action="<?php htmlspecialchars("PHP_SELF"); ?>">
	<h2 style="text-align: center; font-size: 20px; text-align: center;"><font color="black">A supermarket that sells bags of mixed candies. Four types of candies are offered. Candy A costs P35.00/kg, Candy B costs P45/kg, Candy C costs P56/kg and Candy D costs P57.5kg. Write a program that will display a sample receipt of the products purchase that will accumulate and print the amount of bag of candies in terms of weight of each type of candy as provided by the user.</font></h2>
	<center>
		<div class="form-group">
			<label for="sel1">Select a candy:</label>
				<select name="operator" class="form-control" id="sel2" style="width: 150px;">
					<option>None</option>
					<option>Candy A</option>
					<option>Candy B</option>
					<option>Candy C</option>
					<option>Candy D</option>
				</select>					
		</div>
	<div class="form-group"><h2 style="text-align: center; font-size: 20px; text-align: center;"><font color="black">How many kilos:</font> 
			<input type="number" name="num" autocomplete="off" min="0.00" max="9999999" required value="<?php echo $cnA ?>" /></h2>
	</div>
	</center>

	<center><button type="submit" name="exercise4" value="submit" class="btn btn-primary btn-block" style="width: 200px;">Compute</button></center>
</form>