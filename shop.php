<?php
	session_start();
	$con = mysqli_connect('localhost','root','','school_projects');
	if(isset($_POST["add"]))
	{
		if(isset($_SESSION["cart"]))
		{
			$item_array_id = array_column($_SESSION["cart"], "product_id");
			if(!in_array($_GET["id"], $item_array_id))
			{
				$count = count($_SESSION["cart"]);
				$item_array = array(
				'product_id' => $_GET["id"],
				'item_name' => $_POST["hidden_name"],
				'product_price' => $_POST["hidden_price"],
				'item_quantity' => $_POST["quantity"]
				);
				$_SESSION["cart"][$count] = $item_array;
				echo '<script>window.location="welcome.php?page=supermarket"</script>';
			}
			else
			{
				//echo '<script>alert("Products already added to cart")</script>';
				echo $_SESSION['message'] = "<div class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>Warning!</strong> Better check yourself, you're not looking too good.</div>";
				echo '<script>window.location="welcome.php?page=supermarket"</script>';
			}
		}
		else
		{
			$item_array = array(
			'product_id' => $_GET["id"],
			'item_name' => $_POST["hidden_name"],
			'product_price' => $_POST["hidden_price"],
			'item_quantity' => $_POST["quantity"]
			);
			$_SESSION["cart"][0] = $item_array;
		}
	}
	if(isset($_GET["action"]))
	{
		if($_GET["action"] == "delete")
		{
			foreach($_SESSION["cart"] as $keys => $values)
			{
				if($values["product_id"] == $_GET["id"])
				{
					unset($_SESSION["cart"][$keys]);
					echo '<script>alert("Product has been removed")</script>';
					echo '<script>window.location="welcome.php?page=supermarket"</script>';
				}
			}
		}
	}
?>