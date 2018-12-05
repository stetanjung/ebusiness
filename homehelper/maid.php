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
		require('nav.php');
		include('connection.php');
	?>
	<h1 class="title">MAIDS</h1>
	<?php
			$displayQuery = "select * from employee";
			$display = mysqli_query($con, $displayQuery);
			$i = 0;
			while($row = mysqli_fetch_array($display, MYSQLI_ASSOC)){
				if($i%4==0){
					echo('<div class="content">');
					echo('<ul class="ful">');
					echo('<li>');
					echo('<a href="detail.php?id='.$row['employeeID'].'">');
					echo('<img src="./img/'.$row['images'].'" alt="">');
					echo('<p>'.$row['employeeName'].'<br>'.$row['typeName'].'</p>');
					echo('<span>$'.$row['price'].'00/hour</span>');
					echo('</a></li>');
				}
				elseif($i%4==3){
					echo('<li>');
					echo('<a href="detail.php?id='.$row['employeeID'].'">');
					echo('<img src="./img/'.$row['images'].'" alt="">');
					echo('<p>'.$row['employeeName'].'<br>'.$row['typeName'].'</p>');
					echo('<span>$'.$row['price'].'00/hour</span>');
					echo('</a></li></ul></div>');
				}
				else{
					echo('<li>');
					echo('<a href="detail.php?id='.$row['employeeID'].'">');
					echo('<img src="./img/'.$row['images'].'" alt="">');
					echo('<p>'.$row['employeeName'].'<br>'.$row['typeName'].'</p>');
					echo('<span>$'.$row['price'].'00/hour</span>');
					echo('</a></li>');
				}
				$i++;
			}
		?>
	</div>
	<?php
		include('connectionclose.php');
	?>
</body>
</html>