<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <script src="./jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
	<div class="title">
		<h1>Sign Up</h1>
	</div>
    <div id="divID">
    <div style="background-color:transparent;">
        <form id="ff" method="post">
            <ul class="reg-box">
                <li>
                    <label for="">Username</label>
                    <input type="text" name="username" value="" class="account" maxlength="11" style="color:#999;" onBlur="textBlur(this)" onFocus="textFocus(this)"/>
                    <span class="error error5"></span>
                </li>
                <li>
                    <label for="">Password</label>
                    <input type="password" name="password" class="admin_pwd" value="" style="color:#999;" onBlur="textBlur(this)" onFocus="textFocus(this)"/>
                    <span class="error error6"></span>
                </li>
				<li>
                    <label for="">Contact number</label>
                    <input type="password" name="accPassWord" class="admin_pwd" value="" style="color:#999;" onBlur="textBlur(this)" onFocus="textFocus(this)"/>
                    <span class="error error6"></span>
                </li>
				<li>
                    <label for="">Age</label>
                    <input type="password" name="accPassWord" class="admin_pwd" value="" style="color:#999;" onBlur="textBlur(this)" onFocus="textFocus(this)"/>
                    <span class="error error6"></span>
                </li>
				<li>
                    <label for="">Mailbox</label>
                    <input type="text" name="accName" value="" class="account" maxlength="11" style="color:#999;" onBlur="textBlur(this)" onFocus="textFocus(this)"/>
                    <span class="error error5"></span>
                </li>
				<li>
                    <label for="">Nationality</label>
                    <input type="text" name="accName" value="" class="account" maxlength="11" style="color:#999;" onBlur="textBlur(this)" onFocus="textFocus(this)"/>
                    <span class="error error5"></span>
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