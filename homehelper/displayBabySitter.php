<?php
	session_start();
	include("connection.php");
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
		$employeeQuery = "select * from employee join serviceType on serviceType.employeeID = employee.employeeID";
		$result = mysqli_query($con, $employeeQuery);
	?>
	<h1 class="title">BEST&nbsp;&nbsp;&nbsp;SELLERS</h1>
	<div class="content">
		<?php
			$i = 0;
			while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
				if($next = mysqli_fetch_array($result, MYSQLI_ASSOC)){
					if($i%4 == 0){
						echo("<ul class='ful'>");
						echo("<li>");
						echo("<a href=''>");
						echo("<img src='' alt=''>");
						echo("<p>$row[employeeName]</p><br><p>$row[typeName]</p>");
						echo("<span>$$row[price]/hour</span>");
						echo("</a></li>");
					}
					elseif ($i%4 == 3) {
						echo("<li>");
						echo("<a href=''>");
						echo("<img src='' alt=''>");
						echo("<p>$row[employeeName]</p><br><p>$row[typeName]</p>");
						echo("<span>$$row[price]/hour</span>");
						echo("</a></li></ul>");
					}
					else{
						echo("<li>");
						echo("<a href=''>");
						echo("<img src='' alt=''>");
						echo("<p>$row[employeeName]</p><br><p>$row[typeName]</p>");
						echo("<span>$$row[price]/hour</span>");
						echo("</a></li>");
					}
				}
				else{
					echo("<li>");
					echo("<a href=''>");
					echo("<img src='' alt=''>");
					echo("<p>$row[employeeName]</p><br><p>$row[typeName]</p>");
					echo("<span>$$row[price]/hour</span>");
					echo("</a></li></ul>");
				}
				$i++;
			}
		?>
	</div>
</body>
</html>