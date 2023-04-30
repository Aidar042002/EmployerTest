<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Тест на сенсомоторные реакции</title>
    <link rel="stylesheet" href="styles/sensomotorReactions.css">
  </head>
  <body>

    <div class="header">
      <h1>Тест на сенсомоторные реакции</h1>
    </div>

    <div class="main">

      <div class="buttons">
        <div class="setOfNumbers">

          <button id="buttonReaction1" class="clickButton" type="button" name="button" onclick="clickButton(this)">Реакция на свет</button><br>
            <div id="reaction1" style="display:none;">
              <p>Оценка скорости реакции на свет</p>
              <button id="startReaction1" type="button" name="button" onclick='startReactionOne("changeColorBlock1")'>Старт</button>
              <div id="changeColorBlock1" class="changeColorBlock1"></div><br>

              <button id="clickButton1" type="button" name="button" onclick="clickButtonOne()">Нажмите сюда</button>
              <br><button type="button" name="button" onclick="showAllButtons()">Назад к выбору теста</button><br>
              <div class="innerResult"> <div id='testAttempt1'></div>
              <div id="innerResultAttempt1"></div>
              <div id="innerResult1"></div> </div>
            </div>

          <button id="buttonReaction2" class="clickButton" type="button" name="button" onclick="clickButton(this)">Реакция на звук</button><br>
            <div id="reaction2" style="display:none;">
              <p>Оценка реакции на звук</p>
              <button id="startReaction2" type="button" name="button">Старт</button>
              <div>
                Здесь работа со звуком
              </div>
              <button id="clickButton2" type="button" name="button">Нажмите сюда</button><br>
              <button type="button" name="button" onclick="showAllButtons()">Назад к выбору теста</button>
            </div>
          <button id="buttonReaction3" class="clickButton" type="button" name="button" onclick="clickButton(this)">Реакция на цвета</button><br>

          <button id="buttonReaction4" class="clickButton" type="button" name="button" onclick="clickButton(this)">Реакция на звук при сложении</button><br>

          <button id="buttonReaction5" class="clickButton" type="button" name="button" onclick="clickButton(this)">Реакция на сложение</button><br>

        </div>
      </div>

    </div>

    <div class="footer">

    </div>

    <script src="scripts/reaction.js" type="text/javascript"></script>
  </body>
</html>
