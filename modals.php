<!-- WELCOME.PHP MODALS -->
<div id="profileModal" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="panel-primary">
					<div class="panel-heading">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title"><center><b>Profile</b></center></h4>
					</div>
					<div class="panel-body">
						<center>
							<img class="img-responsive img-rounded" src="<?php echo $_SESSION['image']; ?>" width="140px" height="110px" alt="profile_picture"/>
							<br>
							<div class="form-group">
								<label>Name: <?php echo $_SESSION['firstname'] . " " . $_SESSION['lastname']; ?></label>
							</div>
							<div class="form-group">
								<label>Email: <?php echo $_SESSION['email']; ?></label>
							</div>
							<div class="form-group">
								<label>Address: <?php echo $_SESSION['address']; ?></label>
							</div>
							<div class="form-group">
								<label>Student Section: <?php echo $_SESSION['section']; ?> </label>
							</div>
							<div class="form-group">
								<label>Student Number: <?php echo $_SESSION['snum']; ?> </label>
							</div>				
							<div class="form-group">
								<label>Rights: <?php echo $_SESSION['role']; ?> </label>
							</div>				
						</center>
					</div>
					<div class="panel-footer" style="height: 50px;">
						<p class="pull-left">Do you want changes into your profile?&nbsp;<a href="#" data-target="#devModal" data-toggle="modal" data-dismiss="modal" style="color: blue;">Edit</a></p>
						<button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
					</div>
					</div>
				</div>
			</div>
		</div>
<!-- END OF WELCOME.PHP MODALS -->


<!-- INDEX MODALS -->
		<div id="loginModal" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title"><center>Sign In</center></h4>
					</div>
					<div class="modal-body">
						<center>
						<form method="POST" action="">
							<div class="input-group input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-envelope"></span>
								</span>
								<input class="form-control" type="email" name="login_email" autocomplete="off" id="login_email" placeholder="Email" autofocus>
							</div>
							<div class="input-group input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-lock"></span>
								</span>
								<input class="form-control" type="password" name="login_password" autocomplete="off" id="login_password" placeholder="Password">
							</div>
							<br>
							<button type="submit" name="login" value="submit" class="btn btn-primary" style="width: 100px; height: 30px;" id="login">Login</button>
						</form>
						</center>
					</div>
					<div class="modal-footer">
						Not a member? <a href="" data-toggle="modal" data-target="#regModal" data-dismiss="modal">Sign up</a>&nbsp;
						<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

		<div id="regModal" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title"><center>Sign Up</center></h4>
					</div>
					<div class="modal-body">
						<center> 
						<form method="POST" action="" enctype="multipart/form-data"> 
									<div class="input-group input-group">
										<span class="input-group-addon">
											<span class="glyphicon glyphicon-font"></span>
										</span>
										<input class="form-control" type="text" name="stud_name" autocomplete="off" id="stud_name" placeholder="First Name" autofocus>
										<input class="form-control" type="text" name="stud_lastname" autocomplete="off" id="stud_lastname" placeholder="Last Name">
									</div>
									<br>

									<div class="input-group input-group">
										<span class="input-group-addon">
											<span class="glyphicon glyphicon-home"></span>
										</span>
										<input class="form-control" type="text" name="address" autocomplete="off" id="address" placeholder="Address">
									</div>

									<div class="input-group input-group">
										<span class="input-group-addon">
											<span class="glyphicon glyphicon-envelope"></span>
										</span>
										<input class="form-control" type="text" name="email" autocomplete="off" id="email" placeholder="Email">
									</div>

									<div class="input-group input-group">
										<span class="input-group-addon">
											<span class="glyphicon glyphicon-briefcase"></span>
										</span>
										<input class="form-control" type="text" name="stud_sec" autocomplete="off" id="stud_sec" placeholder="Your Section">
									</div>

									<div class="input-group input-group">
										<span class="input-group-addon">
											<span class="glyphicon glyphicon-paperclip"></span>
										</span>
										<input class="form-control" type="text" name="stud_studno" autocomplete="off" id="stud_studno" placeholder="Your Student Number">
									</div>
									<br>
									<div class="input-group input-group">
										<span class="input-group-addon">
											<span class="glyphicon glyphicon-lock"></span>
										</span>
										<input class="form-control" type="password" name="password" autocomplete="new-password" id="password" placeholder="Password">
									</div>

									<div class="input-group input-group">
										<span class="input-group-addon">
											<span class="glyphicon glyphicon-repeat"></span>
										</span>
										<input class="form-control" type="password" name="confirmpassword" autocomplete="new-password" id="confirmpassword" placeholder="Confirm Password">
									</div>
									<br>
									<div class="input-group input-group">
										<span class="input-group-addon">
											<span class="glyphicon glyphicon-file"></span>
										</span>
										<input class="form-control" type="file" name="image" autocomplete="off" id="image" accept="images/profile_pic/*" required>
									</div>
									<br>
								<button type="submit" name="register" value="register" class="btn btn-primary" style="width: 100px;" id="register">Register</button>
							<br>	
						</center>
					</form>
					</div>
					<div class="modal-footer">
						Already a member? <a href="" data-toggle="modal" data-target="#loginModal" data-dismiss="modal">Sign in</a>&nbsp;
						<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
<!-- END OF INDEX MODALS -->








<!-- OPTION MODAL -->
<div id="optionModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4><p><b>Options</b></p></h4>
			</div>
			<div class="modal-body">
				<center>Do you want a personalized profile? Unlock all the features of the website?
					<br>
					<br>
				<a href="login.php" class="btn btn-default">Subscribe &amp; Login</a>
				</center>
			</div>
			<div class="modal-footer">
				<button type="close" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>

	</div>
</div>


<div id="updateModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
		<div class="panel-primary">
			<div class="panel-heading">
				<h4><b>Update your Profile</b></h4>
			</div>
			<div class="panel-body">
				<form method="POST" action="" enctype="multipart/form-data">
				<div class="input-group input-group">
				<span class="input-group-addon">
				<span class="glyphicon glyphicon-font"></span>
				</span>
				<input class="form-control" type="text" name="update_stud_name" autocomplete="off" id="update_stud_name" placeholder="First Name" autofocus required value="<?php echo $_SESSION['firstname'];?>">
				<input class="form-control" type="text" name="update_stud_lastname" autocomplete="off" id="update_stud_lastname" placeholder="Last Name" required value="<?php echo $_SESSION['lastname'];?>">
				</div>
					<br>
				<div class="input-group input-group">
				<span class="input-group-addon">
				<span class="glyphicon glyphicon-home"></span>
				</span>
				<input class="form-control" type="text" name="update_address" autocomplete="off" id="update_address" placeholder="Address" required value="<?php echo $_SESSION['address'];?>">
				</div>

				<div class="input-group input-group">
				<span class="input-group-addon">
				<span class="glyphicon glyphicon-envelope"></span>
				</span>
				<input class="form-control" type="text" name="update_email" autocomplete="off" id="update_email" placeholder="Email" required value="<?php echo $_SESSION['email'];?>">
				</div>

				<div class="input-group input-group">
				<span class="input-group-addon">
				<span class="glyphicon glyphicon-briefcase"></span>
				</span>
				<input class="form-control" type="text" name="update_stud_sec" autocomplete="off" id="update_stud_sec" placeholder="Your Section" required value="<?php echo $_SESSION['section'];?>">
				</div>

				<div class="input-group input-group">
				<span class="input-group-addon">
				<span class="glyphicon glyphicon-paperclip"></span>
				</span>
				<input class="form-control" type="text" name="update_stud_studno" autocomplete="off" id="update_stud_studno" placeholder="Your Student Number" required value="<?php echo $_SESSION['snum'];?>">
				</div>
				<br>
				<center><h6><b>Note:</b>&nbsp;You must enter your password in order to change settings.</h6></center>
				<div class="input-group input-group">
				<span class="input-group-addon">
				<span class="glyphicon glyphicon-lock"></span>
				</span>
				<input class="form-control" type="password" name="update_password" autocomplete="new-password" id="update_password" placeholder="Password" required>
				</div>
					<br>
				<div class="input-group input-group">
				<span class="input-group-addon">
				<span class="glyphicon glyphicon-file"></span>
				</span>
				<input class="form-control" type="file" name="update_image" autocomplete="off" id="update_image" accept="images/profile_pic/*" required>
				</div>
				<br>
					<button type="submit" name="updateProfile" class="btn btn-primary pull-left" style="width: 200px;">Save Changes &amp; Exit</button>
					<a href="#" class="btn btn-default pull-right" data-dismiss="modal">Back</a>
				</form>
			</div>
		</div>
		</div>
	</div>
</div>
<!-- END -->

<!-- START FOR NEW MODALS -->
<div id="promptModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="panel-heading">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4><p>Hello! <?php echo $_SESSION['firstname'] . " " . $_SESSION['lastname']; ?></p></h4>
			</div>
			<div class="panel-body">
				<h5><center>What do you want to access?</center></h5>
				<center>
				<a href="home_smadmin.php" class="btn btn-primary">Administrator</a>
				<a href="welcome.php?page=supermarket" class="btn btn-primary">Supermarket</a>
				</center>
			</div>
		</div>
	</div>
</div>
<!-- END -->

<!-- START -->
<div id="shoppingBag" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
				<div class="modal-header">
				    <button type="button" class="close" data-dismiss="modal">&times;</button>
				    <h2>Shopping Bag</h2>
				</div>
				<div class="modal-body">
					<form method="GET" action="">
					    <div class="table-responsive">
					    <table class="table table-bordered">
					    <tr>
						    <th width="40%">Product Name</th>
						    <th width="10%">Quantity</th>
						    <th width="20%">Price Details</th>
						    <th width="15%">Order Total</th>
						    <th width="5%">Action</th>
					    </tr>
					    <?php
						if(!empty($_SESSION["cart"]))
						{
							$total = 0;
							foreach($_SESSION["cart"] as $keys => $values)
							{
								?>
					            <tr>
					            <td><?php echo $values["item_name"]; ?></td>
					            <td><?php echo $values["item_quantity"] ?></td>
					            <td>$ <?php echo $values["product_price"]; ?></td>
					            <td>$ <?php echo number_format($values["item_quantity"] * $values["product_price"], 2); ?></td>
					            <td><a href="shop.php?action=delete&id=<?php echo $values["product_id"]; ?>"><span class="text-danger">X</span></a></td>
					            </tr>
					            <?php 
								$total = $total + ($values["item_quantity"] * $values["product_price"]);
							}
							?>
					        <tr>
					        <td colspan="3" align="right">Total</td>
					        <td align="right">$ <?php echo number_format($total, 2); ?></td>
					        <td></td>
					        </tr>
					        <?php
						}
						?>
					    </table>
					    </div>
					    <br>
					    <a href="#" name="receipt" class="btn btn-primary" data-toggle="modal" data-target="#partialReceipt" data-dismiss="modal">Proceed to Checkout</a>
					</form>
				</div>
				<div class="modal-footer">
					<a href="#" class="btn btn-primary" data-dismiss="modal">Close</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="partialReceipt" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
				<div class="modal-header">
				    <button type="button" class="close" data-dismiss="modal">&times;</button>
				    <center><h2>Official Receipt</h2></center>
				</div>
				<div class="modal-body">
					<form method="GET" action="">
					    <div class="table-responsive">
					    <table class="">
					    <tr>
						    <th width="40%">Product Name</th>
						    <th width="10%">Quantity</th>
						    <th width="20%">Price Details</th>
						    <th width="30%">Order Total</th>
					    </tr>
					    <?php
						if(!empty($_SESSION["cart"]))
						{
							$total = 0;
							foreach($_SESSION["cart"] as $keys => $values)
							{
								?>
					            <tr>
					            <td><?php echo $values["item_name"]; ?></td>
					            <td><?php echo $values["item_quantity"] ?></td>
					            <td>$ <?php echo $values["product_price"]; ?></td>
					            <td>$ <?php echo number_format($values["item_quantity"] * $values["product_price"], 2); ?></td>
					            </tr>
					            <?php 
								$total = $total + ($values["item_quantity"] * $values["product_price"]);
							}
							?>
					        <tr>
					        <td colspan="3" align="right">Total</td>
					        <td align="right">$ <?php echo number_format($total, 2); ?></td>
					        <td></td>
					        </tr>
					        <?php
						}
						?>
					    </table>
					    </div>
					    <br>
					</form>
				</div>
				<div class="modal-footer">
					<a href="#" name="receipt" class="btn btn-primary" data-toggle="modal" data-target="#devModal" data-dismiss="modal">Print</a>
					<a href="#" class="btn btn-primary" data-dismiss="modal">Close</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END -->

<!-- DEV MODAL -->
<div id="devModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		
		<div class="panel panel-primary">
			<div class="panel-heading">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4><p><b>Sorry for the Inconvenience</b></p></h4>
			</div>
			<div class="panel-body">
				<center><b><h3>Comeback Later! This site still needs improvements</b></h3>
				</center>
			</div>
			<div class="panel-footer">
				<button type="close" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>

	</div>
</div>

<!-- END -->