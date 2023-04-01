<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Вход</title>
    <link rel="stylesheet" href="signIn.css">
  </head>
  <body>
    <div class="header">
        <h1>Вход</h1>
    </div>
    <div class="main">
      <?php session_start(); ?>
      <form action="enter.php" method="post">
        Логин:<br><input type="email" name="email" placeholder="enter login"><br>
        Пароль:<br><input type="password" name="password" placeholder="enter password"><br>
        <input type="submit" name="submit" value="Отправить">
        <p>Еще не зарегистрированы?<br>
          <a href="register.php">Зарегистрируйтесь</a></p>
      </form>
    </div>
    <?php
    if(!empty($_SESSION['message'])){
      echo '<p class="msg">' . $_SESSION['message'] . '<p/>';
    }
    unset($_SESSION['message']);
     ?>
    <div class="footer">

    </div>
  </body>
</html>
