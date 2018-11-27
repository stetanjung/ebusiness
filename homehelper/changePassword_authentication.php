<?php
    include('connection.php');
    session_start();
    $users_id = $_SESSION['users_id'];
    //required field names
    $required = array('oldPassword', 'newPassword');
    //go through each field names, make sure each one exists and not empty;
    $error = false;
    foreach($required as $field){
        if(empty($_POST[$field])){
            $error = true;
        }
    }

    if($error){
        echo("<script>alert('All fields are required.');window.location.href='/ebusiness/homehelper/signup.php';</script>");
    }
    else{
        $oldPassword = md5(_POST['oldPassword']);
        $newPassword = md5($_POST['newPassword']);
        $updatePasswordQuery = "UPDATE user SET pass='$newPassword' where userID='$users_id' and pass='$oldPassword'";
        $updatePassword=mysqli_query($con, $updatePasswordQuery);
        if($updatePassword === TRUE){
            echo("<script>alert('Password has been updated.');window.location.href='/ebusiness/homehelper/changePassword.php';</script>");
        }
        else{
            echo("<script>alert('Please enter your old password correctly.');window.location.href='/ebusiness/homehelper/changePassword.php';</script>");
        }
    }
    include('connectionclose.php');
?>