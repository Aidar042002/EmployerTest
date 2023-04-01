<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="register.css">
  </head>
  <body>
    <div class="header">
      <h1>Регистрация</h1>
    </div>
    <div class="main">
        <form class="" action="signUp.php" method="post">
            Логин:<br><input type="text" name="login"><br>
            Выберите пол:<br><input type="radio" name="gender" value="man">Мужской
            <input type="radio" name="gender" value="woman">Женский<br>
            Ваш возраст:<br><input type="number" name="age"><br>
            Email:<br><input type="email" name="email"><br>
            Пароль:<br><input type="password" name="password"><br>
            Повторите пароль:<br><input type="password" name="password_confirm"><br>
            <input type="submit" name="submit" value="Отправить">
        </form>
    </div>
    <?php
    session_start();
    if (!empty($_SESSION['message'])) {
      echo '<p class="msg">' . $_SESSION['message'] . '</p>';
    }
    unset($_SESSION['message']);
     ?>
    <div class="header">

    </div>
  </body>
</html>
