<?php
    session_start();
    include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search</title>
</head>
<body>
    <?php
        require("nav.php");
    ?>
    <div class="content">
    <?php
        if(empty($_POST['query'])){
            echo("<script>history.back()</script>");
        }
        else{
            $search = strtolower($_POST['query']);
            if($search == "maid"){
                echo("<script>window.location.href='maid.php';</script>");
            }
            elseif($search == "baby sitter"){
                echo("<script>window.location.href='babysitter.php';</script>");
            }
            else{
                $query = "select * from employee where employeeName='%$search%'";
                $queryResult = mysqli_query($con, $query);
                while($row = mysqli_fetch_array($queryResult, MYSQLI_ASSOC)){
                    if($i%4==0){
                        echo('<ul class="ful">');
                        echo('<li>');
                        echo('<a href="detail.php?id='.$row['employeeID'].'">');
                        echo('<img src="img/'.$row['images'].'" alt="">');
                        echo('<p>'.$row['employeeName'].'<br>'.$row['typeName'].'</p>');
                        echo('<span>$'.$row['price'].'00/hour</span>');
                        echo('</a></li>');
                    }
                    elseif($i%4==3){
                        echo('<li>');
                        echo('<a href="detail.php?id='.$row['employeeID'].'">');
                        echo('<img src="img/'.$row['images'].'" alt="">');
                        echo('<p>'.$row['employeeName'].'<br>'.$row['typeName'].'</p>');
                        echo('<span>$'.$row['price'].'00/hour</span>');
                        echo('</a></li></ul>');
                    }
                    else{
                        echo('<li>');
                        echo('<a href="detail.php?id='.$row['employeeID'].'">');
                        echo('<img src="img/'.$row['images'].'" alt="">');
                        echo('<p>'.$row['employeeName'].'<br>'.$row['typeName'].'</p>');
                        echo('<span>$'.$row['price'].'00/hour</span>');
                        echo('</a></li>');
                    }
                }
            }
        }
    ?>
    </div>
    <?php
        include("connectionclose.php");
    ?>
</body>
</html>