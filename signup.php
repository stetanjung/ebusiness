<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <script src="./jquery-3.2.1.min.js"></script>
<style type="text/css">
*{
	margin:0px;
	padding:0px;
}
.title{
	position: relative;
	top: 120px;
	text-align: center;
}
h1{
	color: #EEC50F;
	font-size: 46px;
}
body{
    background: white;
}
#divID {
	border: 1px solid #f0f0f0;
    border-radius:10px;
    box-shadow: -0px 0px 5px 1px #ababab;
    position: absolute;
    left: 40%;
    top: 50%;
    width: 600px;
    margin-left: -200px;
    margin-top: -150px;
    font-family: "times";
    -moz-user-select: none;
    -webkit-user-select: none;
    user-select:none;
    color:#D98C0B;
}
.register_dialog_info {
    float: left;
    margin-left:10px;
    color: #fff;
    margin-top: 5px;
    font-size: 20px;
}
form{padding: 20px 0px;}
ul li {list-style: none;}
.sub {
    text-align: center;
}
.sub input {
	position: relative;
	left: 20px;
    display: inline-block;
    width: 300px;
    background-color: #012246;
    color: rgb(255, 255, 255);
    font-size: 20px;
    text-align: center;
    height: 40px;
    line-height: 40px;
    font-family: "courier";
    outline: none;
    border: none;
    margin: auto;
    border-radius: 10px;
}
input[type = "submit"]:hover{cursor: pointer;}

.reg-box { padding-left: 30px; position: relative;}

.reg-box li { line-height: 44px; width: 500px; overflow: hidden; }

.reg-box li label { width: 140px; height: 50px; float: left; line-height: 50px; text-align: right; padding-right: 30px; }

.reg-box li input,.reg-box li select{ border-radius: 3px; padding: 6px 0; font-size: 16px; width: 296px; height: 39px; line-height: 28px; border: 1px solid #dddddd; text-indent: 0.5em; float: left; }

.reg-box li select option{font-size:16px;}

/*验证码*/
.add { width: 128px; height: 44px; float: left; display: inline; cursor: pointer; margin-left: 20px; }

.reg-box li .sradd { width: 148px; text-indent: 4px; font-size: 14px; }

.reg-box li .input-code { width: 106px; padding: 10px; font-family: "courier"; font-style: italic; color: red; letter-spacing: 1px; cursor: pointer; text-align: center; text-indent: 0; }

.error { clear:both;display:block;color: red; padding-left: 90px; padding-bottom:5px;height:20px;float: left; font-size:12px;line-height: 20px;}

input { background-color: #fff; outline: none; }

.reg-box li { width: auto; }

</style>
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