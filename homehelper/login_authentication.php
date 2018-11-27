<?php
    include('connection.php');
    session_start();
    //required field names
    $required = array('username', 'password');
    //go through each field names, make sure each one exists and not empty;
    $error = false;
    foreach($required as $field){
        if(empty($_POST[$field])){
            $error = true;
        }
    }
    if($error){
        echo("<script>alert('All fields are required.');window.location.href='/~16094653d/ebusiness/homehelper/login.php';</script>");
    }
    else{
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $result=mysqli_query($con,"SELECT userID FROM user WHERE username='$username' AND pass='$password'");
        if(mysqli_num_rows($result) == 0) {
            echo("<script>alert('User is not exist. $password');window.location.href='/~16094653d/ebusiness/homehelper/login.php';</script>");
        }
        else{
            $array=mysqli_fetch_array($result,MYSQLI_ASSOC);
            if($array['userID'] == '1'){
                $_SESSION['users_id']=$array['userID'];
                echo("<script>window.location.href=' /~16094653d/ebusiness/homehelper/admin.html'</script>");            
            }
            $_SESSION['users_id']=$array['userID'];
        }
    }
    include('connectionclose.php');
    echo("<script>window.location.href=' /~16094653d/ebusiness/homehelper/'</script>");
?>