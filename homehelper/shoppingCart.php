<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
			$employeeID = $_GET['code'];
			$productByCode = $db_handle->runQuery('SELECT * FROM employee WHERE employeeID=$employeeID');
			$itemArray = array($productByCode[0]["employeeID"]=>array('name'=>$productByCode[0]["employeeName"], 'code'=>$productByCode[0]["employeeID"], 
			'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]['price'], 'image'=>$productByCode[0]["image"]));
			$data = array($productByCode[0]['employeeID'], $_POST['quantity']);
			
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["employeeID"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["code"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
				array_push($_SESSION['history'], $data);

			} else {
				$_SESSION["cart_item"] = $itemArray;
				$_SESSION['history'] = array();
				array_push($_SESSION['history'], $data);
			}
		}
		break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
		break;
	case "empty":
		unset($_SESSION["cart_item"]);
		break;	
}
}
?>
<!DOCTYPE HTML>
<html>
	<head>
	<title>Shopping Cart | HomeHelper</title>
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
		require('nav.php')
		?>

		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="bread"><span><a href="index.php">My Account</a></span> / <span>Shopping Cart</span></p>
					</div>
				</div>
			</div>
		</div>


		<div class="colorlib-product">
			<div class="container">
				<div class="row row-pb-lg">
					<div class="col-md-10 offset-md-1">
						<div class="process-wrap">
							<div class="process text-center active">
								<p><span>01</span></p>
								<h3>Shopping Cart</h3>
							</div>
							<div class="process text-center">
								<p><span>02</span></p>
								<h3>Checkout</h3>
							</div>
							<div class="process text-center">
								<p><span>03</span></p>
								<h3>Order Complete	</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row row-pb-lg">
					<div class="col-md-12">
					
					<a class="btn btn-big" href="shoppingCart.php?action=empty">Empty Cart</a>

					<?php
					if(isset($_SESSION["cart_item"])){
						$total_quantity = 0;
						$total_price = 0;
					}
					?>	
					
						<div class="product-name d-flex">
							<div class="one-forth text-left px-4">
								<span>Product Details</span>
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
							<div class="one-eight text-center px-4">
								<span>Remove</span>
							</div>
						</div>
						
						<?php
						foreach ($_SESSION["cart_item"] as $item) {
							$item_price = $item["quantity"]*$item["price"];
						?>
						
						<div class="product-cart d-flex">
							<div class="one-forth">
								<div class="product-img" style="background-image: url(images/<?php echo $item["image"]; ?>);">
								</div>
								<div class="display-tc">
									<h3><?php echo $item["name"]; ?></h3>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<span class="price"><?php echo "$ ".$item["price"]; ?></span>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<h3><?php echo $item["quantity"]; ?></h3>
								<!--
									<input type="text" id="quantity" name="quantity" class="form-control input-number text-center" value="<?php echo $item["quantity"]; ?>" min="1" max="100">
									<script>
									var quantity = document.getElementById("quantity").value;
									<?php 
									#$item["quantity"] = quantity;
									?>
									</script>
									-->
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<span class="price"><?php echo "$ ". number_format($item_price,2); ?></span>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<a href="shoppingCart.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"><img src="img/icon-delete.png" alt="Remove Item" /></a>
								</div>
							</div>
							
							<?php
							$total_quantity += $item["quantity"];
							$total_price += ($item["price"] * $item["quantity"]);
						}
						
						$_SESSION["cart_totalPrice"] = $total_price;
						$_SESSION["cart_totalQuantity"] = $total_quantity;
						?>
						
						<div class="product-cart d-flex">
							<div class="one-forth">
								<div class="product-img">
								</div>
								<div class="display-tc">
									<h3></h3>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<span class="price"></span>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc"></div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<span class="price"><?php echo "$ ".number_format($total_price, 2); ?></span>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc"></div>
							</div>
					
						
						
						</div>
						
				
					
					</div>
				</div>

					<div class="col-md-12 text-center">
						<p><a href="checkout.php" class="btn btn-big" style="margin-top:-50px;">Next</a></p>
					</div>
			</div>
		</div>
		
		
		<?php
		require('footer.php');
		?>
		
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
	</div>

	</body>
</html>