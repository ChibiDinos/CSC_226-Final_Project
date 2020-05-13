<?php

//Unset all session values.
$_SESSION = array();
// Destroy the session.
session_destroy();
 
//Redirect back to login page.
header("location: login.php");
exit;
?>
