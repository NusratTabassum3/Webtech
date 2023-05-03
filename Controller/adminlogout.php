<?php 
if (session_status() === PHP_SESSION_NONE) {
    // start the session
    session_start();
}

session_unset();
session_destroy();

header("Location: ../view/adminlogin.php");
?>
