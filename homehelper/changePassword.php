<?php
	session_start();
?>
<!DOCTYPE html>
<!--
Author: Code Apes.
-->
<html>
<head>
	<title>Account Information | HomeHelper</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link type="text/css" rel="stylesheet" href="styles/styles.css">
	<link type="text/css" rel="stylesheet" href="styles/account.css">
	<script>
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
		?>
		<div class="content" style="text-align:center;">
		<h1>Personal Information</h1><hr>
			<form action="changePassword_authentication.php" method="post">
				<li>
					<label for="">Old Password</label>
					<input type="password" name="oldPassword" value="" style="color:#999;" maxlength="16"/>
					<span class="error error2"></span>
				</li>
				<li>
					<label for="">New Password</label>
					<input type="password" name="newPassword" value="" style="color:#999;" minlength="8" maxlength="16"/>
					<span class="error error2"></span>
				</li>
				<div class="sub">
					<input type="submit" value="Submit"/>
				</div>
			</form>
		<br>
		</div>
	</main>
</div>
<?php
require('footer.php');
?>
</body>
</html>