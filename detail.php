<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Details</title>
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
	require('header.php')
	?>
<header>
	<span class="span1"><a href="#">HOME</a></span>
	<span class="span2">&nbsp;/&nbsp;&nbsp;PRODUCT DETAILS</span>
</header>
<div class="content">
	<div class="mian_left">
		<img src="img/gundam.bmp" alt="">
	</div>
	<div class="mian_right">
		<h3>name</h3>
		<span>$68.00/hour</span>
		<p>detail...</p>
		<button class="add">Add to cart</button>
	</div>
</div>
</body>
</html>