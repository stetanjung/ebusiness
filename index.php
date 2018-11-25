<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		*{
			margin:0px;
		}
		ul li{
			list-style: none;
		}

		a{
			text-decoration:none;
			color: black;
		}
		a:hover{
			color: #fabf14;
		}
		h2{
			font-size: 40px;
			font-family:Monospace;
			text-decoration:overline underline;
			text-decoration-color: white;
		}
		.header{
			width: 100%;
			height: 200px;
			font-family: Fantasy;
			white-space:nowrap;
		}
		.content{
			position: relative;
			width: 100%;
			border-bottom: 1px solid white;
		}
		.aul{
			display: flex;
			justify-content: flex-end;
		}
		.signup{
			border-left: 1px solid white;
			border-right: 1px solid white;
			padding:3px 20px;
		}
		.login{
			border-right: 1px solid white;
			padding:3px 20px;
			margin-right: 30px;
		}
		.header_body{
			display: flex;
			justify-content: space-between;
			margin-top: 30px;
			border-bottom: 1px solid white;
		}
		.header_right_ul{
			display: flex;
			
		}
		.header_left{
			margin-left: 30px;
		}
		.header_right ul li{
			margin-right: 30px;
		}
		.inp{
			margin-right: 30px;
		}
		.inp input{
			width: 300px;
			height: 30px;
			background: #ccc;
			padding-left: 20px;
			outline:0;
			border: none;
		}
		b{
			color: #FABF14;
			font-size: 70px;
			font-family:Monospace;
			position: relative;
			top: -21px;
		}
		.none{
			display: none;
		}
		.none li{
			margin-top:5px;
		}
		.block:hover .none{
			display: block;
		}
		.inp{
			display: flex;
			
		}
		.img{
			width:20px;
			height: 20px;
			position: absolute;
			right: 35px;
			top: 66px;
		}
		.cart{
			width:20px;
			height: 20px;
			position: absolute;
			right: 7px;
			top: 3px;
		}
		.background{
			background: url(img/1.jpg);
			background-size:100%;
		}
		
	</style>
</head>

<body class="background">
<div class="header">
	<div class="content">
		<ul class="aul">
			<li class="signup"><a href="signup.php">Sign Up</a></li>
			<li class="login"><a href="login.php">Log In</a></li>
			<a href="shoppingCart.php"><img class="cart" src="img/icon-cart.png" alt=""></a>
		</ul>
	</div>
	<div class="header_body">
		<div class="header_left" style="display: flex;">
			
			<b>H</b><h2>ome-helper</h2>
		</div>
		<div class="header_right">
			<ul class="header_right_ul">
				<li><a href="index.php">HOME</a></li>
				<li><a href="aboutus.php">ABOUT US</a></li>
				<li class="block">
					<a href="item.php">SERVICE ITEMS</a>
					<ul class="none">
						<li><a href="#">Maid</a></li>
						<li><a href="#">Baby-sitter</a></li>
					</ul>
				</li>
				<li><a href="mailto:17083801d@connect.polyu.hk">MAIL US</a></li>
			</ul>
		</div>
		<div class="inp">
			<form action="search.php" name="search" method="post">
			<input type="text" name="query" placeholder="Search...">
			 
			<img class="img" src="img/search.png" onClick="javascript:fsubmit(document.search);">
			</form>
		</div>
	</div>
</div>
	

</body>
</html>

<script language="javascript">
function fsubmit(obj){
obj.submit();
}
</script>