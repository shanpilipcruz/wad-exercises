<?php
	$db = mysqli_connect('127.0.0.1','root','1234','supermarket');	
	$itemsNewCount = $_POST['itemsNewCount'];

	$query = "SELECT * FROM products LIMIT $itemsNewCount";
	$result = mysqli_query($db, $query);

	if(mysqli_num_rows($result) > 1)
	{
		while ($row = mysqli_fetch_array($result)) 
		{
		?>
			<div class="col-md-3">
				<form method="post" action="">
					<div style="border: 1px solid #eaeaec; margin: -1px 19px 3px -1px; box-shadow: 0 1px 2px rgba(0,0,0,0.05); padding:10px;" align="center">
						<img src="<?php echo $row["image"]; ?>" class="img-responsive">
							<h5 class="text-info"><?php echo $row["p_name"]; ?></h5>
								<h5 class="text-danger">$ <?php echo $row["price"]; ?></h5>
									<input type="text" name="quantity" class="form-control" value="1" autocomplete="off">
								<input type="hidden" name="hidden_name" value="<?php echo $row["p_name"]; ?>">
							<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
						<input type="submit" name="add" style="margin-top:5px;" class="btn btn-default" value="Add to Bag">
					</div>
				</form>
			</div>
		<?php
		}
	}
	else
	{
		echo "There are no more items";
	}
?>