<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
 <link rel="stylesheet" href="styles/styles.css">
    <title>Account Verification</title>

</head>
<body>
 <?php
  require('nav.php');
  
	session_start();
	include('connection.php');
    $username = $_POST['username'];
    $email = $_POST['email'];
	
    $query = "select * from user where username='$username' and email='$email'";
    $queryResult = mysqli_query($con, $query);
	if (!$queryResult) {
		echo "The username and email you input do not match! Please try again.";
		header("Refresh:2; url=forgetPassword.php");
	}
	else {
		while($row = mysqli_fetch_array($queryResult, MYSQLI_ASSOC)){
        $_SESSION['userID'] = $row['userID'];?>
		
	<div class="title">
		<h1>Answer Questions</h1>
	</div>
	<div id="divID">
		<div style="background-color:transparent;">

        <form method="POST" action="newPassword.php">
            <ul class="reg-box">
				<li>
                    <label for="">Question 1</label>
                    <?php echo($row['question1']); ?>
                    <span class="error error1"></span>
                </li>
                <li>
                    <label for="">Answer 1</label>
                    <input type="text" name="answer1" value="" style="color:#545454;"/>
                    <span class="error error1"></span>
                </li>
				<li>
                    <label for="">Question 2</label>
                    <?php echo($row['question2']); ?>
                    <span class="error error1"></span>
                </li>
    			<li>
                    <label for="">Answer 2</label>
                    <input type="text" name="answer2" value="" style="color:#545454;"/>
                    <span class="error error1"></span>
                </li>
            </ul>
            <div class="sub">
                <input type="submit" value="Next"/>
            </div>
        </form>
		
		
<?php
    }}
    include("connectionclose.php");
?>
    </div>
</div>
</body>
</html>
