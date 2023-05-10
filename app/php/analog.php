<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../styles/analog.css">
    <script type="text/javascript" src="../scripts/analog.js"></script>
  </head>
  <body>
    <div class="header">
      <h1>Тест на аналоговое движение, движение с преследованием</h1>
    </div>
    <div class="main">

      <div class="reactionDivs">

        <div>
          <div id="div1">
            <button id="button1" type="button" name="button" class="buttons" onclick="showReaction('reaction1')">Аналоговое слежение</button>
            <div id="reaction1" style="display:none;">
              reaction1
              <br><button type="button" name="button" onclick="back()">Назад</button>
            </div>
          </div><br>

          <div id="div2">
            <button id="button2" type="button" name="button" class="buttons" onclick="showReaction('reaction2')">Слежение с преследованием</button>
            <div id="reaction2" style="display:none;">
              reaction2
              <br><button type="button" name="button" onclick="back()">Назад</button>
            </div>
          </div>
        </div>

      </div>

    </div>
    <div class="footer">

    </div>
  </body>
</html>
