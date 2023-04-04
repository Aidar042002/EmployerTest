<?php
session_start();
$_SESSION['message']='Вы вышли';
header("Location:index.php");
?>
