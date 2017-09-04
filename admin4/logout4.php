<?php
// remove all session variables
session_unset();
// destroy the session
session_destroy();
//redirect to login page
header("location: ../admin1/adminlogin1.php");
?>
