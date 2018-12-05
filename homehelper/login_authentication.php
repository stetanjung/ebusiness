<?php
    include('connection.php');
    require("recaptchlib.php");
    session_start();
    $siteKey = "6LfqX3sUAAAAALV6mrSQgHpz7SGj_kvXdZChHvh-";
    $secret = "6LfqX3sUAAAAAFIP1syCuqtNgvNrHyLTg4IBJVs3";

    $lang="en";
    $resp = null;
    $error = null;

    $reCaptcha = new ReCaptcha($secret);

    if ($_POST["g-recaptcha-response"]) {
        $resp = $reCaptcha->verifyResponse(
            $_SERVER["REMOTE_ADDR"],
            $_POST["g-recaptcha-response"]
        );
    }

    //required field names
    $required = array('username', 'password');
    //go through each field names, make sure each one exists and not empty;
    $error = false;
    foreach($required as $field){
        if(empty($_POST[$field])){
            $error = true;
        }
    }
    if($error && $resp == true){
        echo("<script>alert('All fields are required.');window.location.href='login.php';</script>");
    }
    else{
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $result=mysqli_query($con,"SELECT userID FROM user WHERE username='$username' AND pass='$password'");
        if(mysqli_num_rows($result) == 0) {
            echo("<script>alert('User is not exist. $password');window.location.href='login.php';</script>");
        }
        else{
            $array=mysqli_fetch_array($result,MYSQLI_ASSOC);
            if($array['userID'] == '1'){
                $_SESSION['userID']=$array['userID'];
                echo("<script>window.location.href='admin.html'</script>");            
            }
            $_SESSION['userID']=$array['userID'];
        }
    }
    include('connectionclose.php');
    echo("<script>window.location.href=' index.php'</script>");
?>