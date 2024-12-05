<?php
    // Database credentials
    $servername = "phprds.cfi2ec4okuln.ap-south-1.rds.amazonaws.com";
    $username = "root";
    $password = "12345555####";
    $dbname = "auxlib";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

?>