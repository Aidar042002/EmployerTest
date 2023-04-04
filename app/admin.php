<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Админ</title>
    <link rel="stylesheet" href="admin.css">
  </head>
  <body>
    <?php
    if (empty($_SESSION['email'])){
      $_SESSION['message']="Вы не авторизованы";
      header("Location:index.php");
    } else {
      require_once "bd.php";
      $status=$_SESSION['admin'];
      if (!$status) {
         $_SESSION['message']="Доступ для админов";
         header("Location:index.php");
      }
    }
     ?>
     <div class="header">
      <h1>Админ</h1>
     </div>
     <div class="main">
        <ul>
          <li><a href="pvk.php">Список пвк</a></li>
          <li><a href="test.php">Тест для выбора пвк</a></li>
        </ul>
     </div>
     <div class="footer">

     </div>
  </body>
</html>
