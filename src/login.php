<?php
session_start();
require "dbConnect.php";

// Set timeout duration (10 minutes)
$_SESSION["last_activity"] = time();


if ($_SERVER["REQUEST_METHOD"] ==  "POST") {
    $user = $conn->real_escape_string($_POST['username']);
    $pass = $conn->real_escape_string($_POST['password']);

    // Query to check if the user exists
    $sql = "SELECT * FROM user WHERE username='$user' AND password='$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found, start session
        $_SESSION['username'] = $user;
        header("Location: homepage.php"); // Redirect to homepage
        exit();
    } else {
        echo "Invalid username or password";
    }
}

$conn->close();
