<?php

$servername = "localhost";
$dbname = "cakecloud";
$username = "root";
$password = "";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}