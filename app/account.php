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
          echo "email:". '<br/>';
          $email=$_SESSION['email'];
          echo $email . '<br/>';
          echo "id:". '<br/>';
          $id = $_SESSION['id'];
          echo $id . '<br/>';
          echo 'pol:'. '<br/>';
          $gender =$_SESSION['pol'];
          echo $gender .'<br/>';
          echo 'age:'. '<br/>';
          $age =$_SESSION['age'];
          echo $age . '<br/>';
          require_once "bd.php";
          $result = mysqli_query($db, "SELECT *FROM users where email='$email'");
          $myrow = mysqli_fetch_array($result);
          $_SESSION['admin']=$myrow['admin'];
          if ($myrow['admin']==1) {
            echo "status: admin";
          }
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
