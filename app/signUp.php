<?php
session_start();
require_once 'bd.php';
$login =$_POST['login'];
$gender = $_POST['gender'];
$age=$_POST['age'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

if ($password == $password_confirm) {
  mysqli_query($db, "INSERT INTO users(login, pol, age, email, password, admin) values('$login','$gender', '$age', '$email','$password',0)");
  $_SESSION['message']='Регистрация прошла успешно.Попробуйте войти.';
  header("Location: index.php");
}else {
  $_SESSION['message'] = 'Пароли не совпадают.Введите данные заново.';
  header("Location: register.php");
}
 ?>
