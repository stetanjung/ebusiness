<?php
    echo("Welcome To Test Offer Page<br><br>");

    if(!$_GET){
        echo "I have no details of who you are!";
    }else{
        echo "Your Email ID is <b>".$_GET["employeeID"]."</b> and you're Offer ID id <b>".$_GET["offer_id"]."</b>";
    }
?>