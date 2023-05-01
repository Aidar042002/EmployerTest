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
          <!--1-->
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
            <!--2-->
          <button id="buttonReaction2" class="clickButton" type="button" name="button" onclick="clickButton(this)">Реакция на звук</button><br>
            <div id="reaction2" style="display:none;">
              <p>Оценка реакции на звук</p>
              <button id="startReaction2" type="button" name="button" onclick="startReactionTwo()">Старт</button>
              <div>
                Здесь работа со звуком
                <audio id="audioOne">
                  <source src="ul-trazvuk-pisk.mp3" type="audio/mp3">
                </audio>
              </div>
              <button id="clickButton2" type="button" name="button" onclick="clickButtonTwo()">Нажмите сюда</button><br>
              <button type="button" name="button" onclick="showAllButtons()">Назад к выбору теста</button>
              <div id="testAttempt2"></div>
              <div id="innerResultAttempt2"></div>
              <div id="innerResult2"></div>
            </div>

            <!--3-->
          <button id="buttonReaction3" class="clickButton" type="button" name="button" onclick="clickButton(this)">Реакция на цвета</button><br>
            <div id="reaction3" style="display:none;">
              <p>Оценка реакции на несколько цветов</p>
              <button id="startReaction3" type="button" name="button" onclick="startReactionThree()">Старт</button><br>
              <div id="blocks1" class="blocks">
                <div id="block1" class="block"></div>
                <button type="button" name="button" onclick='changeColor("block1")'>Red</button>
              </div>
              <div id="blocks2" class="blocks">
                <div id="block2" class="block"></div>
                <button type="button" name="button" onclick="changeColor('block2')">Green</button>
              </div>
              <div id="blocks3" class="blocks">
                <div id="block3" class="block"></div>
                <button type="button" name="button" onclick="changeColor('block3')">Blue</button>
              </div>
              <br><br><button type="button" name="button" onclick="showAllButtons()">Назад к выбору теста</button>
              <div id="testAttempt3"></div>
              <div id="innerResultAttempt3"></div>
              <div id="innerResult3"></div>
            </div>
            <!--4-->
          <button id="buttonReaction4" class="clickButton" type="button" name="button" onclick="clickButton(this)">Реакция на звук при сложении</button><br>
            <div id="reaction4" style="display:none;">
              <p>Оценка реакции на сложение со звуком</p>
              <button id="startReaction4" type="button" name="button" onclick="startReactionFour()">Старт</button>
              <div>
                <audio id="audioTwo">
                  <source src="сложение.mp3" type="audio/mp3">
                </audio>
                <br><button id="d41" type="button" name="button" onclick="clickButtonFour('d41')">Четное</button>
                <button id="d42" type="button" name="button" onclick="clickButtonFour('d42')">Нечетное</button>
              </div>
              <br><button type="button" name="button" onclick="showAllButtons()">Назад к выбору теста</button>
              <div id="testAttempt4"></div>
              <div id="innerResultAttempt4"></div>
              <div id='result44'></div>
              <div id="innerResult4"></div>
            </div>
          <!--5-->
          <button id="buttonReaction5" class="clickButton" type="button" name="button" onclick="clickButton(this)">Реакция на сложение</button><br>
          <div id="reaction5" style="display:none;">
            <p>Оценка реакции на сложение</p>
            <button id="startReaction5" type="button" name="button" onclick="startReactionFive()">Старт</button>
            <div>
              <div id="addDigits"></div>
              <br><button id="d51" type="button" name="button" onclick="clickButtonFive('d51')">Четное</button>
              <button id="d52" type="button" name="button" onclick="clickButtonFive('d52')">Нечетное</button>
            </div>
            <br><button type="button" name="button" onclick="showAllButtons()">Назад к выбору теста</button>
            <div id="testAttempt5"></div>
            <div id="innerResultAttempt5"></div>
            <div id='result55'></div>
            <div id="innerResult5"></div>
          </div>
        </div>
      </div>

    </div>

    <div class="footer">

    </div>

    <script src="scripts/reaction.js" type="text/javascript"></script>
  </body>
</html>
