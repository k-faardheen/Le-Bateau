<?php
session_start();
echo 'hello' . $_SESSION['name'];
?>

<a href="logout.php">Logout</a>