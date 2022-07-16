<?php
session_start(); 
session_destroy();

echo $_SESSION['fName']; 
header("Location:../login-form.php");
?>