<?php session_start();

session_unset();
session_destroy();

header("Location: ../view/adminlogin.php");
?>
