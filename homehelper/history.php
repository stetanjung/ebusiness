<?php
	session_start();
	$userID = $_SESSION['userID'];
?>
<!DOCTYPE HTML>
<html>
	<head>
	<title> Order History | HomeHelper</title>
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
			require('nav.php');
			include('connection.php');
		?>

		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="bread"><span><a href="index.php">My Account</a></span> / <span>Order History</span></p>
					</div>
				</div>
			</div>
		</div>


		<div class="colorlib-product">
			<div class="container">
			
				<div class="row row-pb-lg">
					<div class="col-md-12">
					
						<div class="product-name d-flex">
							<div class="one-eight text-left">
								<span>Order Time</span>
							</div>
							<div class="one-forth text-left px-4">
								<span>Service Details</span>
							</div>
							<div class="one-eight text-center">
								<span>Unit Price</span>
							</div>
							<div class="one-eight text-center">
								<span>Quantity</span>
							</div>
							<div class="one-eight text-center">
								<span>Total</span>
							</div>
						</div>
						
						<?php
							$query = "select * from shopping_cart inner join employee on shopping_cart.employeeID = employee.employeeID inner join user on shopping_cart.userID=user.userID inner join payment on shopping_cart.paymentID=payment.paymentID where user.userID=$userID";
							$queryResult = mysqli_query($con, $query);
							while($row = mysqli_fetch_array($queryResult, MYSQLI_ASSOC)){
								$total = $row['employee.price']*$row['shopping_cart.quantity'];
								echo('<div class="product-cart d-flex"><div class="one-eight">');
								echo('<div class="display-tc"><h3>'.$row['paymentID.time'].'</h3></div></div>');
								echo('<div class="one-forth">');
								echo('<div class="display-tc"><h3>'.$row['employee.employeeName'].'</h3></div></div>');
								echo('<div class="one-eight text-center">');
								echo('<div class="display-tc"><span class="price">$'.$row['employee.price'].'.00</span></div></div>');
								echo('<div class="one-eight text-center">');
								echo('<div class="display-tc"><h3>'.$row['shopping_cart.quantity'].'</h3></div></div>');
								echo('<div class="one-eight text-center">');
								echo('<div class="display-tc"><span class="price">$'.$total.'.00</span></div></div></div>');
							}
						?>
					</div>
				</div>
			</div>
		</div>
		
		
		<?php
		require('footer.php')
		?>
	</div>	

	</body>
</html>
