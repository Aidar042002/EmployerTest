<!DOCTYPE html>
<!--

ЭТО ТЕСТОВЫЙ ФАЙЛ, НУЖНО УДАЛИТЬ

-->
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="reaction.css">
  </head>
  <body>
    <div class="header">
      <h1>Реакции</h1>
    </div>
    <div class="main">

      <div>
      <button type="button" name="button" onclick="showReaction('reaction1')">Вопрос1 (показать/скрыть)</button>
      <div id="reaction1" name="reaction1" style="display: none;">
        <p>тест на свет</p>
      </div><br>
      </div>

      <div>
      <button type="button" name="button" onclick="showReaction('reaction2')">Вопрос2 (показать/скрыть)</button>
      <div id="reaction2" class="reaction2" style="display: none;">
        <p>тест 2</p>
      </div><br>
      </div>

      <div>
      <button type="button" name="button" onclick="showReaction('reaction3')">Вопрос3 (показать/скрыть)</button>
      <div id="reaction3" class="reaction3" style="display: none;">
        <p>test3</p>
        <!-- <div class="container">
          <img id="change_image" src="images/red.png" width="400px" height="400px">
          <div class="centered">Нажмите на кнопку когда<br> появится другой цвет</div>
          <p><button id="button" type="button" name="button" onclick="reaction()">Нажмите сюда</button></p>
        </div> -->
          <img id="change_image" src="images/red.png" width="400px" height="400px">
          <p>Нажмите на кнопку когда появится другой цвет</p>
          <button id="button" type="button" name="button" onclick="reaction()">Нажмите сюда</button>

        <!-- img1<div>
          <button type="button" name="button" onclick="showReaction('img1')">Реакция на первый цвет (кликните для оценки)</button>
          <div id="img1" style="display: none;">
            <p>first color</p>
            <div class="container">
              <img id="change_image" src="images/red.png" width="400px" height="400px">
              <div class="centered">Нажмите на кнопку когда<br> появится другой цвет</div>
              <p><button id="button31" type="button" name="button" onclick="reaction()">Нажмите сюда</button></p>
            </div>
          </div>
          <div id="result31"></div>
        </div> img1-->
        <!-- <div>
          <button type="button" name="button" onclick="showReaction('img2')">Реакция на второй цвет (кликните для оценки)</button>
          <div id="img2" style="display: none;">
            <p>second color</p>
          </div>
        </div> -->
        <!-- <div>
          <button type="button" name="button" onclick="showReaction('img3')">Реакция на третий цвет (кликните для оценки)</button>
          <div id="img3" style="display: none;">
            <p>third color</p>
          </div>
        </div> -->
      </div><br>
      <div id="result3"></div>
      </div>

      <div>
      <button type="button" name="button" onclick="showReaction('reaction4')">Вопрос4 (показать/скрыть)</button>
      <div id="reaction4" class="reaction4" style="display: none;">
        <p>test4</p>
      </div><br>
      </div>

      <div>
      <button type="button" name="button" onclick="showReaction('reaction5')">Вопрос5 (показать/скрыть)</button>
      <div id="reaction5" class="reaction5" style="display: none;">
        <p>test5</p>
      </div><br>
      </div>

      <div>
      <button type="button" name="button" onclick="showReaction('reaction5')">Вопрос6 (показать/скрыть)</button>
      <div id="reaction5" class="reaction6" style="display: none;">
        <p>test6</p>
      </div><br>
      </div>

      <div>
      <button type="button" name="button" onclick="showReaction('reaction5')">Вопрос7 (показать/скрыть)</button>
      <div id="reaction5" class="reaction5" style="display: none;">
        <p>test7</p>
      </div><br>
      </div>

    </div>
    <div class="footer">

    </div>
    <script type="text/javascript">
      var startTime;
      var stopTime;
      var showReactionTime;
      var element;
      function showReaction(element_id){

        // element = element_id;
        var obj = document.getElementById(element_id);
          //Если элемент с id-шником element_id существует
          if (document.getElementById(element_id)) {
              //Записываем ссылку на элемент в переменную obj

              //Если css-свойство display не block, то:
              if (obj.style.display != "block") {
                  startTime=new Date();
                  if(element_id=='reaction3') changeImage();
                  obj.style.display = "block"; //Показываем элемент
              }
              else {obj.style.display = "none";} //Скрываем элемент
          }

      }
      //
      function reaction(){
        timeStop=new Date();
        var time=timeStop-timeStart;
        document.getElementById('reaction3').style.display="none";
        showReactionTime=document.getElementById('result3').innerHTML='Реакция зачтена: '+time/1000+"s";
      }
      //
      //first image
      function changeImage(){
      var images='images/blue.png';
      var slider= document.getElementById('change_image');
      setInterval(
        function(){
          slider.src=images;
        },1000);
      }
        //
    </script>
  </body>
</html>
