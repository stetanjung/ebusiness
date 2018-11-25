<?php
    include('connection.php');
    session_start();
    //required field names
    $required = array('username', 'password', 'connum', 'age', 'gender', 'email', 'country', 'q1', 'a1', 'q2', 'a2');
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
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $phone = $_POST['connum'];
        $age = $_POST['age'];
        $gender = ($_POST['gender'] == 'male' ? 'm' : 'f');
        $email = $_POST['email'];
        $country = $_POST['country'];
        $question1 = $_POST['q1'];
        $answer1 = $_POST['a1'];
        $question2 = $_POST['q2'];
        $answer2 = $_POST['a2'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo("<script>alert('Invalid email format.');window.location.href='/ebusiness/homehelper/signup.php';</script>");
        }
        $existUserQuery = "select userID from user where username = '$username'";
        $existUser = mysqli_fetch_array(mysqli_query($con, $existUserQuery), MYSQLI_ASSOC);

        if($existUser == null){
            $insertUser = "insert into user (username, fullname, email, password, phonenumber) values ('$username', '$fullname', '$email', '$password', '$phone')";
            mysqli_query($con, $insertUser);
        }
        include('connectionclose.php');
        echo("<script>alert('User is successfully created.');window.location.href=' /ebusiness/homehelper/'</script>");
    }
?>