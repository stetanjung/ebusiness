<?php
    include("connection.php");

    $user = "CREATE TABLE user (
        userID int unsigned auto_increment primary key,
        username varchar(30) not null,
        firstname varchar(30) not null,
        lastname varchar(30) not null,
        email varchar(90) not null,
        contactNumber varchar(20) not null,
        question1 varchar(200) not null,
        answer1 varchar(200) not null,
        question2 varchar(200) not null,
        answer2 varchar(200) not null,
        age int unsigned not null,
        gender varchar(1) not null,
        country varchar(30) not null
    )";

    $comment = "CREATE TABLE comment (

    )";

    $employee = "CREATE TABLE empolyee (

    )";

    $serviceType = "CREATE TABLE service_type (

    )";

    $shoppingCart = "CREATE TABLE shopping_cart (

    )";

    $payment = "CREATE TABLE payment (

    )";

    $createTable = array();

    array_push($createTable, $user, $comment, $employee, $serviceType, $shoppingCart, $payment);

    for($i = 0; $i < count($createTable); $i++){
        if(mysqli_query($con, $createTable[$i]) === TRUE){
            echo("Table"+$i+" is created.");
        }
        else{
            echo("Error creating table"+$i+": " . mysqli_error($con));
            break;
        }
    }
?>