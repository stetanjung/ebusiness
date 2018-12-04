<?php
    $SERVERNAME = "localhost";//"mysql.comp.polyu.edu.hk";
    $USERNAME = "root";/** student id *///"16094653d";
    $PASSWORD = "";/** password *///"mbnjwyhb";
    $SCHEMA = "home-helper";/** default schema (student id) *///"16094653d";
 
    $con = new mysqli($SERVERNAME, $USERNAME, $PASSWORD, $SCHEMA);
    if(!$con){
        die("Connection Failed: ".mysqli_connect_error());
        echo("Please contact the admin");
    }
?>