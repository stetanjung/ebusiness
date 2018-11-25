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
        echo("<script>alert('All fields are required.');window.location.href='/ebusiness/homehelper/login.php';</script>");
    }
    else{
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $result=mysqli_query($con,"SELECT users_id FROM users WHERE username='$username' AND password='$password'");
        if(mysqli_num_rows($result)==0) {
            echo("<script>alert('User is not exist.');window.location.href='/ebusiness/homehelper/login.php';</script>");
        }
        else{
            $array=mysqli_fetch_array($result,MYSQLI_ASSOC);
            $_SESSION['users_id']=$array['users_id'];
            
        }
    }
    echo("<script>window.location.href=' /comp2121/assignment2/phoneFood'</script>");
    include('connectionclose.php');
?>