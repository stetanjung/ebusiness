<?php
    include('connection.php');
    session_start();
        $username = 'stetanjung';
        $password = md5('stephen');
        $phone = '12345678';
        $age = '20';
        $gender = 'male';
        $email = 'tanjungstephen@gmail.com';
        $country = 'Hong Kong';
        $question1 = 'qwer';
        $answer1 = 'qwer';
        $question2 = 'qwer';
        $answer2 = 'qwert';
        
            $insertUser = "insert into user (username, pass, email, contactNumber, question1, answer1, question2, answer2, age, gender, country) values ('$username', '$password', '$email', '$phone', '$question1', '$answer1', '$question2', '$answer2', '$age', '$gender', '$country')";
            mysqli_query($con, $insertUser);
            echo(mysqli_error($con));
        
        include('connectionclose.php');
?>