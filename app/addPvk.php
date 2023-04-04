<?php
session_start();
require_once "bd.php";
$name=$_POST['name'];
$description=$_POST['description'];

mysqli_query($db, "INSERT INTO pvk(name, description) values('$name','$description')");
$_SESSION['message']='ПВК добавлен';
header("Location: pvk.php");
 ?>
