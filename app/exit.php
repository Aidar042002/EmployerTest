<?php
session_start();
$_SESSION['message']='Вы вышли';
session_unset();
session_destroy();
header("Location:index.php");
?>
