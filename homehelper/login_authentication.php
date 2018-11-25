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

    $_SESSION['usersID'] = '';

    echo("<script>window.location.href=' /comp2121/assignment2/phoneFood'</script>");
    include('connectionclose.php');
?>