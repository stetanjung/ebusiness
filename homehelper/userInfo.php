<?php
	session_start();
	$userID = $_SESSION['userID'];
	include('connection.php');
?>
<?php
	if(isset($_POST['age'])){
		$age = $_POST['age'];
		$result = mysqli_query($con, "UPDATE user SET age=$age where userID=$userID");
	}
	if(isset($_POST['email'])){
		$email = $_POST['email'];
		$result = mysqli_query($con, "UPDATE user SET email='$email' where userID=$userID");
	}
	if(isset($_POST['gender'])){
		$gender = $_POST['gender'];
		if(strtolower($gender) == "male"){
			$gender = "m";
		}
		else{
			$gender = "f";
		}
		$result = mysqli_query($con, "UPDATE user SET gender=$gender where userID=$userID");
	}
	if(isset($_POST['phone'])){
		$phone = $_POST['phone'];
		$result = mysqli_query($con, "UPDATE user SET contactNumber='$phone' where userID=$userID");
	}
?>
<!DOCTYPE html>
<!--
Author: Code Apes.
-->
<html>
<head>
	<title>Account Information</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link type="text/css" rel="stylesheet" href="styles/styles.css">
	<link type="text/css" rel="stylesheet" href="styles/account.css">
	<script>
	function EditPhone(){
		document.getElementById("phoneSub").type="submit";		
		document.getElementById("phone").style = "display:none";
		document.getElementById("phoneInput").style="display:default";
		document.getElementById("phoneEdit").style = "display:none";
	}

	function EditEmail(){
		document.getElementById("emailSub").type="submit";		
		document.getElementById("email").style = "display:none";
		document.getElementById("emailInput").style="display:default";
		document.getElementById("emailEdit").style = "display:none";
	}
	
	function EditGender(){
		document.getElementById("genderSub").type="submit";
		document.getElementById("gender").style = "display:none";
		document.getElementById("genderInput").style="display:default";
		document.getElementById("genderEdit").style = "display:none";
	}
	
	function EditAge(){
		document.getElementById("ageSub").type="submit";		
		document.getElementById("age").style = "display:none";
		document.getElementById("ageInput").style="display:default";
		document.getElementById("ageEdit").style = "display:none";
	}
	</script>
</head>
<body>
<?php
	require('nav.php');
?>
<div class="container">
	<!-- main body -->
	<main>
		<?php
			require('account_sidebar.php');
			$userQuery = "select * from user where userID=$userID"; 
			$resultQuery = mysqli_query($con, $userQuery);
			$array = mysqli_fetch_array($resultQuery, MYSQLI_ASSOC);
		?>
		<div class="content" style="text-align:center;">
		<h1>Personal Information</h1><hr>
		<table>
		<tr>
		  <td><h3>Username:</h3></td>
		  <td><?php echo('<h3 id="uname">'.$array["username"].'</h3>');?></td><!-- Username cannot be changed-->
		  <td></td>
		</tr>
		<tr>
			<form action="userInfo.php" method="post">
		  <td><h3>Contact number:</h3></td>
		  <td><?php echo('<h3 id="phone">'.$array["contactNumber"].'</h3>');?></td>
		  <input type="text" name="phone" id="phoneInput" placeholder="Your phone.." style="display:none;">
		  <td id="phoneEdit"><div class="btn-inverse" onclick="EditPhone()">Edit</div></td>
		  <input type="hidden" value="Confirm" id="phoneSub">
		  </form>
		</tr>
		<tr>
			<form method="post" action="userInfo.php">
		  <td><h3>Age:</h3></td>
		  <td><?php echo('<h3 id="age">'.$array["age"].'</h3>');?></td>
		  <input type="number" id="ageInput" name="age" placeholder="Your age.." style="display:none;">
		  <td id="ageEdit"><div class="btn-inverse" onclick="EditAge()">Edit</div></td>
		  <input type='hidden' value='Confirm' id='ageSub'>
		  </form>
		</tr>
		<tr>
			<form action="userInfo.php" method="post">
		  <td><h3>Email:</h3></td>
		  <td><?php echo('<h3 id="email">'.$array["email"].'</h3>');?></td>
		  <input type="text" name="email" id="emailInput" placeholder="Your email.." style="display:none;">
		  <td id="emailEdit"><div class="btn-inverse" onclick="EditEmail()">Edit</div></td>
		  <input type="hidden" value="Confirm" id="emailSub">
		  </form>
		</tr>		
		<tr>
		  <td><h3>Nationality:</h3></td>
		  <td><?php echo('<h3 id="country">'.$array["country"].'</h3>');?></td>
		</tr>
		</table><br>
		</div>
	</main>
</div>
<?php
require('footer.php');
?>
</body>
</html>