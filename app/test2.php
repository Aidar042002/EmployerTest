<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>1</title>
    <link rel="stylesheet" href="test1.css">
  </head>
  <body>
    <div class="header">
      <h1>Тест для професии "Frontend-разработчик"<a href="index.php" style="float:right;">На главную</a></h1>
    </div>
    <div class="main">

        <?php
        session_start();
        $id=$_SESSION["id"];
        ?>
        <p>Отметьть галочкой 10 качеств и оцените рейтинг</p>
        <?php
        require_once "bd.php";
        $res = mysqli_query($db, "SELECT *FROM pvk");
        $pvks = mysqli_fetch_all($res, MYSQLI_ASSOC);

        if(isset($_POST['send'])){

          if(empty($errors)){
          $count = count($_POST['pvk']);
          for($i=0; $i<$count; $i++){
            $res = mysqli_query($db, "INSERT INTO test(id_pvk, id_expert, prof_id, rating)
            VALUES ('{$_POST['pvk'][$i]}', '{$id}',2 ,'{$_POST['rate'][$_POST['pvk'][$i]-1]}')");
            $_SESSION['message']="ПВК добавлены";
            header("Location:test.php");
    		}
      }
    }
         ?>

    <form action="" method="post">
      <?php
      $i=0;
      foreach ($pvks as $pvk) {
        $i++;
        echo '<div><input type="checkbox" value='.$pvk['id'].' name="pvk[]" role="switch" id="flexSwitchCheckDefault'.$i.'">
        <label class="form-check-label" for="flexSwitchCheckDefault'.$i.'">&nbsp;'.$pvk['name'].'</label></input></div><br>';
        echo '<div id="'.$pvk['id'].'" class="checkbox-blocks"  ><label for="customRange2'.$i.'" id="textcustomRange2'.$i.'" class="form-label">Оценка (от 1 до 10): </label>
        <input type="range" class="form-range" name="rate[]" min="1" max="10" value="5" step=1 id="customRange2'.$i.'"></div>';
      }
       ?>
       <button type="submit" name="send" class="btn btn-primary">Отправить</button>
    </form>
    </div>
    <div class="footer">

    </div>
  </body>
</html>
