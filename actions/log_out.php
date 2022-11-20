<!-- this code logs out a user from the system-->

<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
 
// Destroy the session.
session_destroy();
 
// Redirect to Home page
header("location:../login/login.php");
exit;
?>