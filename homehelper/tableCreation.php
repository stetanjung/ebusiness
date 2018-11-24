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
        commentID int unsigned auto_increment primary key,
        paymentID int unsigned not null,
        userID varchar(30) not null,
        content varchar(200) not null,
    )";

    $employee = "CREATE TABLE empolyee (
        eployeeID int unsigned auto_increment primary key,
        employeeName varchar(30) not null,
        contactNumber varchar(20) not null,
        age int unsigned not null,
        gender varchar(1) not null,
    )";

    $serviceType = "CREATE TABLE service_type (
        serviceID int unsigned auto_increment primary key,
        employeeID varchar(30) not null,
        typeName varchar(30) not null,
        price int unsigned not null,
        availableTime int unsigned not null,
        description int unsigned not null,
    )";

    $shoppingCart = "CREATE TABLE shopping_cart (
        cartID int usigned auto_increment primary key,
        userID int unsigned not null,
        serviceID int unsigned not null,
        paymentID int unsigned not null,
    )";

    $payment = "CREATE TABLE payment (
        paymentID int unsigned auto_increment primary key,
        cartID int unsigned not null,
        userID int unsigned not null,
        creditCard int varchar(16) not null,
        address int varchar(200) not null,
        time int varchar(20) not null,
        totalPrice unsigned not null,
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