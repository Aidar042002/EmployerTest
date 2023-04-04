<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];

require_once "bd.php";

$result = mysqli_query($db, "SELECT *FROM users where email='$email'");
$myrow = mysqli_fetch_array($result);


if (empty($myrow['password'])){
    $_SESSION['message'] = 'Введенный вами пароль неверный';
    header("Location:signIn.php");
    }else {
    if ($myrow['password']==$password) {
    $_SESSION['email']=$myrow['email'];
    $_SESSION['id']=$myrow['id'];
    $_SESSION['pol']=$myrow['pol'];
    $_SESSION['age']=$myrow['age'];
    $_SESSION['message']='Вы вошли.';
    header("Location:index.php");
    }
  }
 ?>
