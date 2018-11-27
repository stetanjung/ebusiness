<?php
    include('connection.php');
    session_start();
    //required field names
    $required = array('name', 'phone', 'price', 'detail', 'gender', 'age');

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $gender = ($_POST['gender'] == 'male' ? 'm' : 'f');
    $insertUser = "insert into employee (employeeName, contactNumber, age, gender) values ('$name', '$phone', '$age', '$gender')";
    mysqli_query($con, $insertUser);
    echo(mysqli_error($con));
    include('connectionclose.php');
    echo("<script>alert('Employee is added.');window.location.href=' /~16094653d/ebusiness/homehelper/admin.html'</script>");
?>