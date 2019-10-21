<?php
session_start();
unset($_SESSION['UserLogin']);
unset($_SESSION['Account_type']);
echo header('location:index.php');
?>