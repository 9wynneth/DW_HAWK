<?php
    $servername = "127.0.0.1";
    $user = "root";
    $pass = ""; 
    $dbname = "star_schema";

    $conn = mysqli_connect($servername, $user, $pass, $dbname);

    if ($conn->connect_error) {
    die("Connection failed: " . mysqli_connect_error());
    }
?>