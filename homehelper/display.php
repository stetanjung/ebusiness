<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Best sellers</title>
</head>
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
	color: black;
}
.title{
	margin:20px auto;
	width: 200px;

}
.content{
	margin-top: 140px;
}
.ful{
	margin:10px auto;
	display: flex;
	justify-content: space-around;
}
.ful li{
	display: block;
	width: 300px;
	height: 380px;
	border:1px solid #ccc;
	text-align: center;
}
.ful li:hover{
	
}
.ful li a{
	display: inline-block;
}
.ful li img{
	width: 100%;
	height: 225px;
}
.ful li p{
	text-align: center;
	margin-top: 20px;
	font-weight: 600;
}
.ful li span{
	display: inline-block;
	margin-top: 20px;
	font-weight: 600;
	color: #fabf14;
}
</style>
<body>
	<?php
		require('nav.php')
	?>
	<h1 class="title">BEST&nbsp;&nbsp;&nbsp;SELLERS</h1>
	<div class="content">
		<ul class="ful">
			<li>
				<a href="detail.php">
					<img src="img/m1.jpg" alt="">
					<p>Lily<br>Maid</p>
					<span>$60.00/hour</span>
				</a>
			</li>
			<li>
				<a href="detail.php">
					<img src="img/b2.jpg" alt="">
					<p>Ada<br>Baby-sitter</p>
					<span>$60.00/hour</span>
				</a>
			</li>
			<li>
				<a href="detail.php">
					<img src="img/m2.jpg" alt="">
					<p>Belinda<br>Maid</p>
					<span>$60.00</span>
				</a>
			</li>
			<li>
				<a href="detail.php">
					<img src="img/m3.png" alt="">
					<p>Coral<br>Maid</p>
					<span>$60.00/hour</span>
				</a>
			</li>
		</ul>
		<ul class="ful">
			<li>
				<a href="detail.php">
					<img src="img/b3.jpg" alt="">
					<p>Dana<br>Baby-sitter</p>
					<span>$60.00/hour</span>
				</a>
			</li>
			<li>
				<a href="detail.php">
					<img src="img/b4.jpg" alt="">
					<p>Jolie<br>Baby-sitter</p>
					<span>$60.00/hour</span>
				</a>
			</li>
			<li>
				<a href="detail.php">
					<img src="img/m4.png" alt="">
					<p>Nancy<br>Maid</p>
					<span>$60.00/hour</span>
				</a>
			</li>
			<li>
				<a href="detail.php">
					<img src="img/b5.jpg" alt="">
					<p>Rita<br>Baby-sitter</p>
					<span>$60.00/hour</span>
				</a>
			</li>
		</ul>
	</div>
</body>
</html>
