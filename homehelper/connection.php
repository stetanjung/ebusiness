<?php
    $SERVERNAME = "mysql.comp.polyu.edu.hk";
    $USERNAME = /** student id */"17083801d";
    $PASSWORD = /** password */"qhmqlsqo";
    $SCHEMA = /** default schema (student id) */"17083801d";
 
    $con = new mysqli($SERVERNAME, $USERNAME, $PASSWORD, $SCHEMA);
    if(!$con){
        die("Connection Failed: ".mysqli_connect_error());
        echo("Please contact the admin");
    }
?>