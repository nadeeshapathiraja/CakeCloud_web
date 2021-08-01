<?php

    $servername= "localhost";
    $dbname= "techswor_db_cakecloud";
    $username ="techswor_nadeesha";
    $password = "Vi06CqaeJ6F7";
    
    // Create connection
    $con = mysqli_connect($servername, $username, $password, $dbname);
    
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }