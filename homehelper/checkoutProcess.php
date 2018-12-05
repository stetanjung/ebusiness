<?php
    session_start();
    include('connection.php');
    $address = $_POST['address'];
    $time = $_POST['time'];
    $ccNo = $_POST['ccNo'];
    $ccName = $_POST['ccName'];
    $id = array();
    $quantity = array();
    $totalPrice = $_SESSION['cart_totalPrice'];
    $userID = $_SESSION['userID'];
    $payment = "insert into payment (userID, creditCard, address, time, totalPrice) values ($userID, '$ccNo', '$address', '$time', $totalPrice)";
    $paymentQuery = mysqli_query($con, $payment);
    foreach($_SESSION['history'] as $key => $value){
        foreach($value as $k => $v){
            if($k == 'id'){
                array_push($id, $v);
            }
            else{
                array_push($quantity, $v);
            }

        }
    }
    $payment = "select paymentID from payment where time='$time'";
    $paymentResult = mysqli_fetch_array(mysqli_query($con, $payment), MYSQLI_ASSOC);
    $paymentID = $paymentResult['paymentID'];
    for($i = 0; $i < count($id); $i++){
        $employeeID = $id[$i];
        $quantities = $quantity[$i];
        $shoppingCart = "insert into shopping_cart (userID, employeeID, paymentID, quantity) values ($userID, $employeeID, $paymentID, $quantities)";
        $shoppingCartInsert = mysqli_query($con, $shoppingCart);
    }
    echo('<script>window.location.href="order-complete.php";</script>');
    include('connectionclose.php');
?>