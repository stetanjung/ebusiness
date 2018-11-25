<?php
    $SERVERNAME = "mysql.comp.polyu.edu.hk";
    $USERNAME = /** student id */"";
    $PASSWORD = /** password */"";
    $SCHEMA = /** default schema (student id) */"";
 
    $con = new mysqli($SERVERNAME, $USERNAME, $PASSWORD, $SCHEMA);
    if(!$con){
        die("Connection Failed: ".mysqli_connect_error());
        echo("Please contact the admin");
    }
?>