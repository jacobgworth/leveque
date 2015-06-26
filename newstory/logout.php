<?php
session_start();

    unset($_SESSION['email_login']);

session_destroy();

header("location:login.php");
?>
