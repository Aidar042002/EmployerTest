<?php
session_start();
 ?>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Добавление пвк</title>
    <link rel="stylesheet" href="pvk.css">
  </head>
  <body>
    <div class="header">
        <h1>Добавление пвк</h1>
    </div>
    <div class="main">
      <?php
      if(!empty($_SESSION['message'])){
        echo '<p class="msg">' . $_SESSION['message'] . '<p/>';
      }
      unset($_SESSION['message']);
       ?>
        <ul>
          <li>Добавить пвк
            <form action="addPvk.php" method="post">
              <input type="text" name="name" placeholder="введите имя"><br/>
              <input type="text" name="description" placeholder="введите описание"><br/>
              <input type="submit" name="submit">
            </form>
          </li>
          <li>Список пвк
                <?php
                require_once "bd.php";
                $result =mysqli_query($db, "SELECT *FROM pvk");
                $array=mysqli_fetch_all($result, MYSQLI_ASSOC);
                ?>
                <table>
                  <tr>
                    <th class="id">ID</th>
                    <th>Качество</th>
                    <th>Описание</th>
                  </tr>
                  <?php
                  $i=0;
                  foreach ($array as $pvk) {
                    echo '<tr>';
                    echo "<td class='id'>{$pvk['id']}</td>";
                    echo "<td>{$pvk['name']}</td>";
                    echo "<td>{$pvk['description']}</td>";
                    echo '</tr>';
                  }
                  ?>
                </table>
          </li>
        </ul>
    </div>
    <div class="footer">

    </div>
  </body>
</html>
