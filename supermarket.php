<?php
	$db = mysqli_connect('127.0.0.1','root','','supermarket');
?>
<div class="container" style="width: 100%;">
	<center>
		<div class="jumbotron" style="width: 84%;align-content: center; background-image: url('img/smbg3.jpg');">
			<h1 style="color: black;"><b>Supermarket</b></h1> 
			<p style="color: black;"><b>Grab your favorite sweets here at the Supermarket</b></p>
			<a href="#" data-toggle="modal" data-target="#shoppingBag" class="btn btn-default">Shopping Bag</a>
		</div>
	</center>
<script type="text/javascript">
	$(document).ready(function () {
		var = itemsCount = 8;
		$("button").click(function () {
			itemsCount = itemsCount + 8;
			$('#supermarket').load("load-items.php", {
				itemsNewCount: itemsCount
			});
		});
	});
</script>
<div class="col-md-12">
	<div class="panel panel-primary">
		<div class="panel-body">
			<div class="supermarket">
				<?php
					$query = "SELECT * FROM products LIMIT 8";
					$result = mysqli_query($db, $query);

					if(mysqli_num_rows($result) > 0)
					{
						while ($row = mysqli_fetch_array($result)) 
						{
						?>
							<div class="col-md-3">
								<form method="post" action="shop.php?action=add&id=<?php echo $row["id"]; ?>">
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
				?>
			</div>
		</div>
	</div>
</div>
</div>