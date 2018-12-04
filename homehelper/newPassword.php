<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
 <link rel="stylesheet" href="styles/styles.css">
    <title>New Password</title>

</head>
<body>
 <?php
  require('nav.php');
  
	session_start();
	include('connection.php');
    $userID = $_SESSION['userID'];
	
	while($row = mysqli_fetch_array(mysqli_query($con, "select * from user where userid='$userID'"), MYSQLI_ASSOC)){
        if($row['answer1'] == $_POST['answer1'] && $row['answer2'] == $_POST['answer2']){
            $query = "update user set password='djvoignr' where userID=$userID";
            mysqli_query($con, $query);?>
			
	<div class="title">
		<h1>Success!</h1>
	</div>
	
	<h3>You new password is reset to [djvoignr].</h3>
	<a href="login.php"><div class="btn">Login now</div>
			
			
<?
        }
        else{
            echo("Wrong answer! <script>window.history.back();</script>")
        }
    }

    session_destroy();
    include('connectionclose.php');
?>

</body>
</html>
