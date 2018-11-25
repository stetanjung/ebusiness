<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
	<!-- reCAPTCHA -->
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
	<div class="title">
		<h1>Log In</h1>
	</div>
	<div id="divID">
		<div style="background-color:transparent;">
		<form method="POST" action="login_authentication.php">
			<ul class="reg-box">
				<li>
					<label for="">Username</label>
					<input type="text" name="username" value="" maxlength="13" style="color:#545454;"/>
					<span class="error error1"></span>
				</li>
				<li>
					<label for="">Password</label>
					<input type="password" name="password" value="" style="color:#999;"/>
					<span class="error error2"></span>
				</li>
				<li>
					<!-- CAPTCHA -->
					<div id="captcha">
						<div class="g-recaptcha" data-sitekey="6LfqX3sUAAAAALV6mrSQgHpz7SGj_kvXdZChHvh-"></div>
					</div>
				</li>
			</ul>
			
			<div class="sub">
				<input type="submit" value="Submit"/>
			</div>
		</form>
		</div>
	</div>
</body>
</html>