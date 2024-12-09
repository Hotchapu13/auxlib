<?php
session_start();
session_unset(); // unsets session variables
session_destroy();// destroys session
header("Location: ../index.html" );// redirects to log in page
?>