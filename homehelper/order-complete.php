<!DOCTYPE HTML>
<html>
	<head>
	<title>Order Complete | HomeHelper</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Animate.css -->
	<link rel="stylesheet" href="styles/animate.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="styles/bootstrap.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="styles/styles.css">
	<link rel="stylesheet" href="styles/shoppingCart.css">
	<style>
	.btn-big {
		padding: 20px 30px 20px 30px;
		font-size: 18px;
		float:right;
	}
	.btn-inverse{
	margin:20px;
	padding:10px 30px;
	}
	h3{
	margin-bottom:20px;
	}
	.btn, .btn-inverse{
	display:inline-block; 
	padding:3px 20px; 
	border:2px solid;
	text-decoration:none;
	font-weight:bold;
    cursor: pointer;
	border-radius: 8px;
}

.btn, .btn-inverse:hover{color:#FFFFFF; background-color:#EEC50F; border-color:#FFFFFF;}
.btn:hover, .btn-inverse{color:#EEC50F; background-color:transparent; border-color:#EEC50F;}
	</style>
	</head>
	
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<?php
		require('nav.php')
		?>

		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="bread"><span><a href="index.html">My Account</a></span> / <span>Order Complete</span></p>
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
							<div class="process text-center active">
								<p><span>03</span></p>
								<h3>Order Complete</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-10 offset-sm-1 text-center">
						<img src="images/complete.png" alt="Order Complete" height="150" width="150" style="margin-top:-40px; margin-bottom:30px;">

						<h3>Your order is complete.</h3>
						<h3>Thank you for purchasing!</h3> 

						<p>
							<a href="index.php"class="btn-inverse">My Order</a>
							<a href="display.php"class="btn-inverse"><i class="icon-shopping-cart"></i> Continue Shopping</a>
						</p>
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

