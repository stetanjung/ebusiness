<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
 <link rel="stylesheet" href="styles/styles.css">
    <title>Forget Password</title>

</head>
<body>
 <?php
  require('nav.php');
 ?>
 <div class="title">
  <h1>Forget Password</h1>
 </div>
    <div id="divID">
    <div style="background-color:transparent;">
        <form method="POST" action="question.php">
            <ul class="reg-box">
                <li>
                    <label for="">Username</label>
                    <input type="text" name="username" value="" style="color:#545454;"/>
                    <span class="error error1"></span>
                </li>
    			<li>
                    <label for="">Email</label>
					<input type="text" name="email" value="" style="color:#545454;"/>
                    <span class="error error6"></span>
                </li>
            </ul>
            <div class="sub">
                <input type="submit" value="Next"/>
            </div>
        </form>
    </div>
</div>
</body>
</html>
