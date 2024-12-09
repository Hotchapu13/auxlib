<?php

session_start();

// Set timeout duration (10 minutes)
$_SESSION["timeout_duration"] = 600;

// Check if the last request was more than the timeout duration ago
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']) > $_SESSION["timeout_duration"]) {
    session_unset();     // clears all the session variables for the run-time
    session_destroy();   // Destroy session data in the server
    header("Location: ../Index.html?timeout=true"); // Redirect to login with timeout notice
    exit();
}

// Update last activity time stamp
$_SESSION['LAST_ACTIVITY'] = time();

// Destroys session if user is not logged in
if (!isset($_SESSION['username'])) {    
    session_unset();    
    session_destroy();   
    header("Location: ../Index.html"); 
    exit();
}
?>
