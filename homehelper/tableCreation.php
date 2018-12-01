<?php
    include("connection.php");

    $user = "CREATE TABLE user (
        userID int unsigned auto_increment primary key,
        username varchar(30) not null,
        pass varchar(32) not null,
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
        content varchar(200) not null,
        FOREIGN KEY (paymentID) REFERENCES payment(paymentID)
    )";

    $employee = "CREATE TABLE employee (
        employeeID int unsigned auto_increment primary key,
        employeeName varchar(30) not null,
        contactNumber varchar(20) not null,
        age int unsigned not null,
        gender varchar(1) not null
    )";

    $serviceType = "CREATE TABLE service_type (
        serviceID int unsigned auto_increment primary key,
        employeeID int unsigned not null,
        typeName varchar(30) not null,
        price int unsigned not null,
        availableTime int unsigned not null,
        description varchar(200) not null,
        FOREIGN KEY (employeeID) REFERENCES employee(employeeID)
    )";

    $shoppingCart = "CREATE TABLE shopping_cart (
        cartID int unsigned auto_increment primary key,
        userID int unsigned,
        serviceID int unsigned,
        FOREIGN KEY (userID) REFERENCES user(userID),
        FOREIGN KEY (serviceID) REFERENCES service_type(serviceID)
    )";

    $payment = "CREATE TABLE payment (
        paymentID int unsigned auto_increment primary key,
        cartID int unsigned not null,
        userID int unsigned not null,
        creditCard varchar(16) not null,
        address varchar(200) not null,
        time varchar(20) not null,
        totalPrice int unsigned not null,
        FOREIGN KEY (cartID) REFERENCES shopping_cart(cartID),
        FOREIGN KEY (userID) REFERENCES user(userID)
    )";

    $createTable = array();

    array_push($createTable, $user, $employee, $serviceType, $shoppingCart, $payment, $comment);

    for($i = 0; $i < count($createTable); $i++){
        if(mysqli_query($con, $createTable[$i]) === TRUE){
            echo("Table {$i} is created.");
        }
        else{
            echo("Error creating table {$i}: " . mysqli_error($con));
            break;
        }
    }

    $username = 'admin';
    $password = md5('root');
    $email = 'admin@admin.com';
    $contactNumber = '12341234';
    $question1 = 'who am i?';
    $answer1 = 'i am admin';
    $question2 = 'who am i?';
    $answer2 = 'i am admin';
    $age = '99';
    $gender = 'male';
    $country = 'Hong Kong';
    $insertAdmin = "insert into user (username, pass, email, contactNumber, question1, answer1, question2, answer2, age, gender, country) values ('$username', '$password', '$email', '$contactNumber', '$question1', '$answer1', '$question2', '$answer2', '$age', '$gender', '$country')";
    $admin = mysqli_query($con, $insertAdmin);
    if($admin === false){
        echo("Admin cannot be inserted ". mysqli_error($con));
    }
    include('connectionclose.php');
?>