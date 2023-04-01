<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="account.css">
  </head>
  <body>
      <div class="header">
        <h1>Личный кабинет<a href="index.php" style="float:right;">На главную</a></h1>

      </div>
      <div class="main">
      <?php
        if(!empty($_SESSION['email']) && !empty($_SESSION['id'])) {
          echo "<p>Ваш личный кабинет.</p>";
          $email=$_SESSION['email'];
          $id = $_SESSION['id'];
          echo $id . " " . $email;
        }
        else {
          echo "Вы не вошли." . '<a href="signIn.php">Войдите</a>';
        }
      ?>
      </div>
      <div class="footer">

      </div>
  </body>
</html>
