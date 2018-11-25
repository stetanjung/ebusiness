<!DOCTYPE HTML>
<html>
	<head>
	<title>Footwear - Free Bootstrap 4 Template by Colorlib</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Animate.css -->
	<link rel="stylesheet" href="styles/animate.css">

	<!-- Bootstrap  -->
	<link rel="stylesheet" href="styles/bootstrap.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="styles/styles.css">
	<link rel="stylesheet" href="styles/account.css">
	<link rel="stylesheet" href="styles/shoppingCart.css">

	<style>
	.colorlib-form h2 {margin-bottom:0px;}
	.cart-detail h2 {margin-bottom:0px;}
	.toright {margin-left: 30px;}
	.toleft {margin-left: -30px;}
	.btn-big {
		padding: 20px 30px 20px 30px;
		font-size: 18px;
		float:right;
	}
	</style>
	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<?php
		require('header.php')
		?>

		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="bread"><span><a href="index.html">Home</a></span> / <span>Checkout</span></p>
					</div>
				</div>
			</div>
		</div>


		<div class="colorlib-product">
			<div class="container">
				<div class="row row-pb-lg">
					<div class="col-sm-10 offset-md-1">
						<div class="process-wrap">
							<div class="process text-center active">
								<p><span>01</span></p>
								<h3>Shopping Cart</h3>
							</div>
							<div class="process text-center active">
								<p><span>02</span></p>
								<h3>Checkout</h3>
							</div>
							<div class="process text-center">
								<p><span>03</span></p>
								<h3>Order Complete</h3>
							</div>
						</div>
					</div>
				</div>
				
				<form action="#">
					<div class="row form-group">
						<div class="col-sm-9">
							<input type="text" name="quantity" class="form-control input-number" placeholder="Your Coupon Number...">
						</div>
						<br>
						<div class="col-sm-3">
							<input type="submit" value="Apply Coupon" class="btn" style="margin-left:-10px;">
						</div>
					</div>
				</form>
				
				<div class="row">
								<div class="cart-detail">
									<h2>Cart Total</h2>
									<ul>
										<li>
											<span>Subtotal</span> <span>$100.00</span>
											<ul>
												<li><span class="toright">1 x Product Name</span> <span class="toleft">$99.00</span></li>
												<li><span class="toright">1 x Product Name</span> <span class="toleft">$78.00</span></li>
											</ul>
										</li>
										<li><span>Shipping</span> <span>$0.00</span></li>
										<li><span>Discount:</span> <span>$45.00</span></li>
										<li><span>Order Total</span> <span>$180.00</span></li>
									</ul>
								</div>
						

						   <div class="w-100"></div>

						
								<div class="cart-detail">
									<h2>Payment Method</h2>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="optradio"> Credit Card Payment</label>
											</div>
										</div>
									</div>
									
								   <div class="col-md-12">
										<div class="form-group">
												<label for="cardNo">Credit Card Number:</label>
											<input type="text" id="cardNo" class="form-control" placeholder="">
									  </div>
								   </div>
								   
								   	  <div class="col-md-12">
										<div class="form-group">
												<label for="cardHolder">Card Holder Name:</label>
											<input type="text" id="cardHolder" class="form-control" placeholder="">
									  </div>
								   </div>
									
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="optradio"> Check Payment</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="optradio"> Paypal</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="checkbox">
											   <label><input type="checkbox" value=""> <b>I have read and accept the terms and conditions.</b></label>
											</div>
										</div>
									</div>
					

					</div>
					<div class="col-md-12 text-center">
						<input type="submit" value="Submit" class="btn btn-big" style="margin-top:50px;">
					</div>
				</div>
			</div>
		</div>

		<?php
		require('footer.php')
		?>
	</div>
	
	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
	</div>

	</body>
</html>

