<?php
    session_start();
    include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search</title>
</head>
<body>
    <?php
        require("nav.php");
    ?>
    <?php
        if(empty($_POST['query'])){
            echo("<script>history.back()</script>");
        }
        else{
            
        }
    ?>

    <?php
        include("connectionclose.php");
    ?>
</body>
</html>