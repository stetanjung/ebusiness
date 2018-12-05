<?php
	session_start();
	$employeeID = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Details | HomeHelper</title>
<style>
*{
	margin:0px;
	padding:0px;
}
ul li{
	list-style: none;
}
a{
	text-decoration:none;
}
header{
	width: 85%;
	margin:10px auto;
	font-size: 14px;
}
.span1 a{
	color: #fabf14;
}
.content{
	width: 85%;
	margin:0px auto;
	margin-top: 120px;
	display: flex;
}
.mian_left{
	width: 60%;
}
.mian_left img{
	width: 100%;
}
.mian_right{
	width: 32%;
	margin-left: 50px;
}
.mian_right span{
	display: inline-block;
	margin-top: 30px;
	color: #fabf14;
	font-size: 30px;
	font-weight: 600;
}
.mian_right p{
	width: 100%;
	color: rgb(100,100,100);
	margin-top: 30px;
	line-height: 200%;
}
.add{
	width: 55%;
	height: 40px;
	margin-top: 30px;

	background: rgb(50,50,50);
	color: white;
	outline:0;
	border: none;
	border-radius: 8px;
	font-weight: 600;
	font-size: 14px;
	cursor:pointer;
}
</style>
</head>
<body>
	<?php
		require('nav.php');
		include('connection.php');
		$detailQuery = "select * from employee where employeeID=$employeeID";
		$detail = mysqli_query($con, $detailQuery);
	?>
<header>
	<span class="span1"><a href="index.php">HOME</a></span>
	<span class="span2">&nbsp;/&nbsp;&nbsp;PRODUCT DETAILS</span>
</header>
<?php
	while($row = mysqli_fetch_array($detail, MYSQLI_ASSOC)){
		echo('<form method="post" action="shoppingCart.php?action=add&code=$employeeID" class="content">');
		echo('<div class="mian_left">');
		echo('<img src="./img/'.$row['images'].'.jpg" alt="">');
		echo('</div><div class="mian_right">');
		echo('<h3>'.$row['employeeName'].'</h3>');
		echo('<span>$'.$row['price'].'00/hour</span>');
		echo('<p>'.$row['description'].'</p><br>');
		echo('Service Hours: <input type="number" class="product-quantity" name="quantity" value="1" min="1" max="365"/><br>');
		echo('<input type="submit" value="Add to Cart" class="add" />');
		echo('</div></form>');
	}
?>
<?php
	include('connectionclose.php');
?>
</body>
</html>
