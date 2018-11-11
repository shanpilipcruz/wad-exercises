<?php
	if(isset($_POST['exercise1']))
	{
		$length = $_POST['length'];
		$width = $_POST['width'];
		$height = $_POST['height'];

		$product = $length * $width * $height;

		echo "<font color='black'><h4><center><b>The volume of the rectangle is $product</b></h4></center></font>";
	}

	if(isset($_POST['exercise2']))
	{
		$hours = $_POST['hours'];
		$minutes = (60) * $hours;

		if($hours >= 2)
		{
			echo "<font color='black'><h4><center><b>$hours Hours is equal to $minutes Minutes</b></h4></font></center>";
		}
		else if($hours == 1)
		{
			echo "<font color='black'><h4><center><b>$hours Hour is equal to $minutes Minutes</b></h4></font></center>";
		}
		else
		{
			echo " ";
		}
	}

	if(isset($_POST['exercise3']))
	{
		$varA = $_POST['A'];
		$varB = $_POST['B'];
		$varC = $_POST['C'];
		if(isset($varA) || isset($varB) || isset($varC))
		{
					$sum = $varA + $varB + $varC;
					$difference = $varA - $varB - $varC;
					$product = $varA * $varB * $varC;
					$quotient = ($varA / $varB / $varC);
					$sumofsquares += $varA * $varA;

					if($varA == 0 || $varB == 0 || $varC == 0)
					{
						echo " ";
					}
					else
					{
						echo "<center><h4>The sum of A, B, and C is $sum</h4></center>";
						echo "<center><h4>The difference of A, B, and C is $difference</h4></center>";
						echo "<center><h4>The product of A, B, and C is $product</h4></center>";
						echo "<center><h4>The quotient of A, B, and C is $quotient</h4></center>";
						echo "<center><h4>The sum of squares of A is $sumofsquares</h4></center>";
					}
		}
	}

	if(isset($_POST['exercise4']))
	{
		$kilos = $_POST['num'];

		if(isset($_POST['operator']))
		{
			$operator = $_POST['operator'];
		}

		if($operator == 'None')
		{
			echo "You need to select a candy";
		}

	 	else if($operator == 'Candy A')
		{
			if($kilos == 1)
				echo "<h4><b>The cost of the candy that you bought is $" . $kilos * (35) . " and it weights " . $kilos . " Kilogram</b></h4>";
			else
				echo "<h4><b>The cost of the candy that you bought is $" . $kilos * (35) . " and it weights " . $kilos . " Kilograms</b></h4>";
		}

		else if($operator == 'Candy B')
		{
			if($kilos == 1)
				echo "<h4><b>The cost of the candy that you bought is $" . $kilos * (45) . " and it weights " . $kilos . " Kilogram</b></h4>";
			else
				echo "<h4><b>The cost of the candy that you bought is $" . $kilos * (45) . " and it weights " . $kilos . " Kilograms</b></h4>";
		}

		else if($operator == 'Candy C')
		{
			if($kilos == 1)
				echo "<h4><b>The cost of the candy that you bought is $" . $kilos * (56) . " and it weights " . $kilos . " Kilogram</b></h4>";
			else
				echo "<h4><b>The cost of the candy that you bought is $" . $kilos * (56) . " and it weights " . $kilos . " Kilograms</b></h4>";
		}

		else if($operator == 'Candy D')
		{
			if($kilos == 1)
				echo "<h4><b>The cost of the candy that you bought is $" . $kilos * (57.5) . " and it weights " . $kilos . " Kilogram</b></h4>";
			else
				echo "<h4><b>The cost of the candy that you bought is $" . $kilos * (57.5) . " and it weights " . $kilos . " Kilograms</b></h4>";
		}
	}

	#FOR EXERCISE 5 VARIABLE DECLARATION

	if(isset($_POST['exercise5']))
	{
		$earth = $_POST['earth'];
		$mars = 2.63;
		$jupiter = 6.94;

		$mars = ($earth * $mars);
		$mars = "<center>The corresponding weight of a man on Mars is $mars</center>";
		$jupiter = ($earth * $jupiter);
		$jupiter = "<center>The corresponding weight of a man on Jupiter is $jupiter</center>";
		$earth = "<center><h1>The weight of the person on earth is $earth</h1></center>";
		
		if($earth)
		{
			echo "<center><h4>Result: </h4></center>";
			echo $earth;
			echo $mars . "<br>";
			echo $jupiter;
		}
	}
?>