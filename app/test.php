<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Выбор пвк</title>
    <link rel="stylesheet" href="test.css">
  </head>
  <body>
    <div class="header">
      <h1>Выбор пвк<a href="index.php" style="float:right;">На главную</a></h1>
    </div>
    <div class="main">
      <p><?php
      session_start();
      if(!empty($_SESSION['message'])){
        echo '<p class="msg" style="text-align:center;">' . $_SESSION['message'] . '<p/>';
      }
      unset($_SESSION['message']);
       ?></p>
        <ul>
          <li><a href="test1.php">Тест для профессии "Программист C++, Java, C Sharp, Go"</a></li>
          <li><a href="test2.php">Тест для профессии "Frontend-разработчик"</a></li>
          <li><a href="test3.php">Тест для профессии "Программист fullstack"</a></li>
        </ul>
    </div>
    <div class="footer">

    </div>
  </body>
</html>
