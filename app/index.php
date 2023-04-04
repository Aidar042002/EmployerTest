<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Main</title>
    <link rel="stylesheet" href="index.css">
  </head>
  <body>
      <?php session_start(); ?>
      <div class="header">
      <h1>Определение видов программистов и ИТ, ПВК для определенного вида деятельности</h1>
          <div class="nav">
            <ul>
                    <li><a href="index.php">Главная</a></li>
                    <li><a href="signIn.php">Аутентификация</a></li>
                    <li><a href="admin.php">Для админов</a></li>
                    <li><a href="tests.php">Тесты</a></li>
                    <li><a href="account.php">Личный кабинет</a></li>
                    <li><a href="exit.php">Выход</a></li>
            </ul>
          </div>

      </div>

      <?php
      if(!empty($_SESSION['message'])){
        echo '<p class="msg">' . $_SESSION['message'] . '<p/>';
        if($_SESSION['message'] == 'Вы вышли') session_destroy();
      }
      unset($_SESSION['message']);
       ?>

      <div class="main">
          <div class="content">
            <ul>
              <li><b>"Программист C++, Java, C Sharp, Go"</b></li>
              <p>Краткая характеристика:</p>
              <ul>
                <li>Сложность задач: высокая, нужно постоянно дополнительно обучаться</li>
                <li>Зарплата: от 25 000 ₽ до 580 000 ₽</li>
                <li>Основные задачи: программирует сайты, мобильные приложения, утилиты, микроконтроллеры, серверы. На С++, например, могут делать нейросети, а на Go — работать с большими данными.</li>
                <p>Специалистов по тем же большим данным в стране не более ста. Потому что такие программисты нужны не в каждой компании. Но спрос на них высокий, и зарабатывают они на уровне топ-менеджеров.</p>
              </ul>
              <table class="table">
                <tr>
                  <th>Id</th><th>ПВК</th><th>Rating</th>
                </tr>
              <?php
              require_once "bd.php";
              $result = mysqli_query($db, "SELECT distinct pvk.name, test.rating from pvk join test on pvk.id=test.id_pvk where prof_id=1 order by test.rating desc limit 5");
              $i=0;
              while($row=mysqli_fetch_array($result)){
                $i++;
                echo '<tr>';
                echo '<td>' .$i.'</td>';
                echo  '<td>' .$row['name'].'</td>';
                echo  '<td>' .$row['rating'].'</td>';
                echo '</tr>';
              }
              ?>
              </table>
            <li><b>"Frontend-разработчик"</b></li>
            <p>Краткая характеристика:</p>
            <ul>
              <li>Сложность задач: типовые технические задачи, много согласований, все ошибки — простые и на виду</li>
              <li>Зарплата: от 25 000 ₽ до 350 000 ₽</li>
              <li>Основные задачи: фронтендер создает визуальную часть сайта — ту, что видит пользователь.
                 Верстает, анимирует страницы плавно появляющимися элементами, всплывающими формами, встраивает системы контроля. В работе использует JavaScript-библиотеку React.</li>
            </ul>
            <table class="table">
              <tr>
                <th>Id</th><th>ПВК</th><th>Rating</th>
              </tr>
            <?php
            require_once "bd.php";
            $result = mysqli_query($db, "SELECT distinct pvk.name, test.rating from pvk join test on pvk.id=test.id_pvk where prof_id=2 order by test.rating desc limit 5");
            $i=0;
            while($row=mysqli_fetch_array($result)){
              $i++;
              echo '<tr>';
              echo '<td>' .$i.'</td>';
              echo  '<td>' .$row['name'].'</td>';
              echo  '<td>' .$row['rating'].'</td>';
              echo '</tr>';
            }
            ?>
            </table>
            <p>Для новичков работа хороша тем, что у нее невысокий уровень ответственности. Все ошибки разработчик видит сразу и тут же может их исправить.
               Но визуальную часть сайта видит и заказчик, поэтому фронтендеры часто получают правки и согласуют свою работу.</p>
            <li><b>"Программист fullstack"</b></li>
            <p>Краткая характеристика:</p>
            <ul>
              <li>Сложность задач: высокая, отвечает за весь продукт</li>
              <li>Зарплата: от 25 000 ₽ до 550 000 ₽</li>
              <li>Основные задачи: такой специалист может сам собрать сайт с нуля: создать его визуальную часть и написать код для внутренней. Работает в небольших компаниях на маленьких проектах.</li>
              <p>В среднем зарабатывает 120 000 ₽. Может заработать больше, если берет проекты на фрилансе. Чем больше взял, тем больше заработал.</p>
            </ul>
            <table class="table">
              <tr>
                <th>Id</th><th>ПВК</th><th>Rating</th>
              </tr>
            <?php
            require_once "bd.php";
            $result = mysqli_query($db, "SELECT distinct pvk.name, test.rating from pvk join test on pvk.id=test.id_pvk where prof_id=3 order by test.rating desc limit 5");
            $i=0;
            while($row=mysqli_fetch_array($result)){
              $i++;
              echo '<tr>';
              echo '<td>' .$i.'</td>';
              echo  '<td>' .$row['name'].'</td>';
              echo  '<td>' .$row['rating'].'</td>';
              echo '</tr>';
            }
            ?>
            </table>
          </ul>
          </div>
      </div>
      <div class="footer">
        <p>Contacts: don't have</p>
        <p>Copyright © 2023</p>
      </div>
  </body>
</html>
