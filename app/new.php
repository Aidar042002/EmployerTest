<!DOCTYPE html>
<!--итотоговая версия
-->
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="reaction.css">
  </head>
  <body onload="fonload();">
    <div class="header">
      <h1>Reactions</h1>
    </div>
    <div class="main">

      <?php
      session_start(); ?>

      <div id="progress">

      </div>

      <div id="div1">
        <p>Первый вопрос</p>
        <button type="button" name="button" onclick="showHideOne('reaction1')">Скрыть/Показать вопрос</button>
        <div id="reaction1" style="display: none;">
            <img id="img1" src="images/white.png" width="300px" height="300px"><br>
            <button type="button" name="button1" onclick="reactionOne('reaction1')">Нажмите сюда</button>

        </div>
        <div id="result1">

        </div>
      </div>

      <div id="div2">
        <p>Второй вопрос</p>
        <button type="button" name="button" onclick="showHideTwo('reaction2')">Скрыть/Показать вопрос</button>
        <div id="reaction2" style="display: none;">
          <audio src="ul-trazvuk-pisk.mp3" controls autoplay></audio><br>
          <button type="button" name="button" onclick="reactionTwo('reaction2')">Нажмите сюда</button>
        </div>
        <div id="result2">

        </div>
      </div>

      <div id="div3">
            <p>Третий вопрос</p>
            <button type="button" name="button31" onclick="showHideThree('reaction3')">Скрыть/Показать вопрос</button>
            <div id="reaction3" style="display: none;">
            <img id="img3" src="images/red.png" width="300px" height="300px"><br>
            <button id="button" type="button" name="button31" onclick="reactionThree('reaction3')">Нажмите сюда</button>

            </div>
            <div id="result3">

            </div>
      </div>

      <div id="div4">
          <p>Четвертый вопрос</p>
          <button type="button" name="button32" onclick="showHideFour('reaction4')">Скрыть/Показать вопрос</button>
          <div id="reaction4" style="display: none;">
            <img id="img4" src="images/yellow.png" width="300px" height="300px"><br>
            <button id="button" type="button" name="button32" onclick="reactionFour('reaction4')">Нажмите сюда</button>
          </div>
          <div id="result4">

          </div>
      </div>

      <div id="div5">
          <p>Пятый вопрос</p>
          <button type="button" name="button" onclick="showHideFive('reaction5')">Скрыть/Показать вопрос</button>
          <div id="reaction5" style="display: none;">
            <img id="img5" src="images/blue.png" width="300px" height="300px"><br>
            <button id="button" type="button" name="button33" onclick="reactionFive('reaction5')">Нажмите сюда</button>
          </div>
          <div id="result5">

          </div>
      </div>

      <div id="div6">
          <p>Шестой вопрос</p>
          <button type="button" name="button" onclick="showHideSix('reaction6')">Скрыть/Показать вопрос</button>
          <div id="reaction6" style="display: none;">


          <p>Сложение двух чисел под звук</p>
          <audio src="ul-trazvuk-pisk.mp3" controls></audio>
          <p>12 + 7 = <input type="text" id="z_1"></p>
          <button type="button" name="button" onclick="proverit('reaction6')">Проверить</button>
          </div>

          <div id="rezultat">
          </div>
          <div id="result6">

          </div>
      </div>

      <div id="div7">
        <p>Седьмой вопрос</p>
        <button type="button" name="button" onclick="showHideSeven('reaction7')">Скрыть/Показать вопрос</button>
        <div id="reaction7" style="display: none;">
          <p>Сложение двух чисел</p>
          <p>10 + 7 = <input type="text" id="z_2"></p>
          <button type="button" name="button" onclick="proveritTwo('reaction7')">Проверить</button>
          </div>
        </div>

        <div id="rezultat2">
        </div>
        <div id="result7">

        </div>

        <div id="table">
          <p>Таблица результатов</p>
          <table>
            <tr>
              <th>Ид</th><th>Пол</th><th>Возраст</th><th>Результат1</th><th>Резуьтат2</th>
              <th>Результат3</th><th>Результат4</th><th>Результат5</th><th>Результат6</th>
              <th>Результат7</th>
            </tr>
            <td><?php echo $_SESSION['id']; ?></td>
            <td><?php echo $_SESSION['pol'] ?></td>
            <td><?php echo $_SESSION['age'] ?></td>
            <td><span id="span1"></span></td>
            <td><span id="span2"></span></td>
            <td><span id="span3"></span></td>
            <td><span id="span4"></span></td>
            <td><span id="span5"></span></td>
            <td><span id="span6"></span></td>
            <td><span id="span7"></span></td>
          </table>
        </div>


        </div>
    <div class="footer">

    </div>
    <script type="text/javascript">
    var timeStart;
    var timeStop;
    var test;
    var count=0;
    function fonload(){
      test=document.getElementById('progress').innerHTML="Прогресс: "+count+"/7";
    }

    function showHide(element_id) {
              var obj = document.getElementById(element_id);
              if (document.getElementById(element_id)) {

                  if (obj.style.display != "block") {


                      // if(element_id="reaction3") changeImage();
                      // count++;
                      // test=document.getElementById("progress").innerHTML="Прогресс: "+count+"/7";
                      obj.style.display = "block";
                  }
                  else {obj.style.display = "none";

                    }
              }
          }
        function reaction(element_id){
          timeStop=new Date();
          var time=timeStop-timeStart;
          document.getElementById(element_id).style.display="none";
          test1=document.getElementById('result3').innerHTML='Реакция зачтена: '+time/1000+"s";
        }
        function changeImage(){
        var images='images/blue.png';
        var slider= document.getElementById('img1');
        setInterval(
          function(){
            slider.src=images;
            timeStart=new Date();
          },1000);
        }
    //2
    var timeStop2, timeStart2, test2;
    function showHideTwo(element_id) {
              var obj2 = document.getElementById(element_id);
              if (document.getElementById(element_id)) {

                  if (obj2.style.display != "block") {
                    timeStart2=new Date();
                      count++;
                      test=document.getElementById("progress").innerHTML="Прогресс: "+count+"/7";

                      obj2.style.display = "block";
                  }
                  else {obj2.style.display = "none";

                    }
              }
          }
        function reactionTwo(element_id){
          timeStop2=new Date();
          var time2=timeStop2-timeStart2;
          document.getElementById(element_id).style.display="none";
          test1=document.getElementById('result2').innerHTML='Реакция зачтена: '+time2/1000+"s";
          document.getElementById('span2').innerHTML = time2;
        }
    //
    //3
    var timeStart3;
    var timeStop3;
    var test3;
    function showHideThree(element_id) {
              var obj3 = document.getElementById(element_id);
              if (document.getElementById(element_id)) {
                  if (obj3.style.display != "block") {
                      changeImageThree();
                      count++;
                      test=document.getElementById("progress").innerHTML="Прогресс: "+count+"/7";
                      obj3.style.display = "block";
                  }
                  else {obj3.style.display = "none";
                    }
              }
          }
          function reactionThree(element_id){
            timeStop3=new Date();
            var time3=timeStop3-timeStart3;
            document.getElementById(element_id).style.display="none";
            document.getElementById('result3').innerHTML='Реакция зачтена: '+time3/1000+"s";
            document.getElementById('span4').innerHTML = time4;
          }
          function changeImageThree(){
          var images3='images/blue.png';
          var slider3= document.getElementById('img3');
          setInterval(
            function(){
              slider3.src=images3;
              timeStart3=new Date();
            },1000);
          }
    //
    //4
    var timeStart4;
    var timeStop4;
    var test4;
    function showHideFour(element_id) {
              var obj4 = document.getElementById(element_id);
              if (document.getElementById(element_id)) {
                  if (obj4.style.display != "block") {
                      changeImageFour();
                      count++;
                      test=document.getElementById("progress").innerHTML="Прогресс: "+count+"/7";
                      obj4.style.display = "block";
                  }
                  else {obj4.style.display = "none";
                    }
              }
          }
          function reactionFour(element_id){
            timeStop4=new Date();
            var time4=timeStop4-timeStart4;
            document.getElementById(element_id).style.display="none";
            test4=document.getElementById('result4').innerHTML='Реакция зачтена: '+time4/1000+"s";
            document.getElementById('span4').innerHTML = time4;
          }
          function changeImageFour(){
          var images4='images/green.png';
          var slider4= document.getElementById('img4');
          setInterval(
            function(){
              slider4.src=images4;
              timeStart4=new Date();
            },1000);
          }
    //
    //5
    var timeStop5, timeStart5, test5, time5;
    function showHideFive(element_id) {
              var obj5 = document.getElementById(element_id);
              if (document.getElementById(element_id)) {
                  if (obj5.style.display != "block") {
                      changeImageFive();
                      count++;
                      test=document.getElementById("progress").innerHTML="Прогресс: "+count+"/7";
                      obj5.style.display = "block";
                  }
                  else {obj5.style.display = "none";
                    }
              }
          }
          function reactionFive(element_id){
            timeStop5=new Date();
            time5=timeStop5-timeStart5;
            document.getElementById(element_id).style.display="none";
            document.getElementById('result5').innerHTML='Реакция зачтена: '+time5/1000+"s";
            document.getElementById('span5').innerHTML = time5/1000;
          }
          function changeImageFive(){
          var images5='images/yellow.png';
          var slider5= document.getElementById('img5');
          setInterval(
            function(){
              slider5.src=images5;
              timeStart5=new Date();
            },1000);
          }
    //5
    //1
    var timeStop1, timeStart1, test1, time1;
    function showHideOne(element_id) {
              var obj1 = document.getElementById(element_id);
              if (document.getElementById(element_id)) {
                  if (obj1.style.display != "block") {
                      changeImageOne();
                      count++;
                      test=document.getElementById("progress").innerHTML="Прогресс: "+count+"/7";
                      obj1.style.display = "block";
                  }
                  else {obj1.style.display = "none";
                    }
              }
          }
          function reactionOne(element_id){
            timeStop1=new Date();
            time1=timeStop1-timeStart1;
            document.getElementById(element_id).style.display="none";
            document.getElementById('result1').innerHTML='Реакция зачтена: '+time1/1000+"s";
            document.getElementById('span1').innerHTML = time1;
          }
          function changeImageOne(){
          var images1='images/black.png';
          var slider1= document.getElementById('img1');
          setInterval(
            function(){
              slider1.src=images1;
              timeStart1=new Date();
            },1000);
          }
          function returnOne(){
            return time1;
          }
    //
    //vopros6
    function proverit(id){
      pr_otv_zadachi_1 = 'нечет';
      otv_uch_1 = document.getElementById('z_1').value;
      if(otv_uch_1 == pr_otv_zadachi_1){
        document.getElementById('rezultat').innerHTML = "Задания выполнены верно";
      } else{
        document.getElementById('rezultat').innerHTML = "Задания выполнены неверно(ответ четный)";
      }
      reactionSix(id);
    }
    //6
    var timeStop6, timeStart6, time6;
    function showHideSix(element_id) {
              var obj6 = document.getElementById(element_id);
              if (document.getElementById(element_id)) {

                  if (obj6.style.display != "block") {
                    timeStart6=new Date();
                      count++;
                      test=document.getElementById("progress").innerHTML="Прогресс: "+count+"/7";

                      obj6.style.display = "block";
                  }
                  else {obj6.style.display = "none";

                    }
              }
          }
        function reactionSix(element_id){
          timeStop6=new Date();
          var time6=timeStop6-timeStart6;
          document.getElementById(element_id).style.display="none";
          test1=document.getElementById('result6').innerHTML='Реакция зачтена: '+time6/1000+"s";
          document.getElementById('span6').innerHTML = time1/1000;
        }
    //7
    function proveritTwo(id){
      pr_otv_zadachi_1 = 'нечет';
      otv_uch_1 = document.getElementById('z_2').value;
      if(otv_uch_1 == pr_otv_zadachi_1){
        document.getElementById('rezultat2').innerHTML = "Задания выполнены верно";
      } else{
        document.getElementById('rezultat2').innerHTML = "Задания выполнены неверно(ответ четный)";
      }
      reactionSeven(id);
    }

    var timeStop7, timeStart7,test7;
    function showHideSeven(element_id) {
              var obj7 = document.getElementById(element_id);
              if (document.getElementById(element_id)) {

                  if (obj7.style.display != "block") {
                      timeStart7=new Date();
                      count++;
                      test=document.getElementById("progress").innerHTML="Прогресс: "+count+"/7";

                      obj7.style.display = "block";
                  }
                  else {obj7.style.display = "none";

                    }
              }
          }
        function reactionSeven(element_id){
          timeStop7=new Date();
          var time7=timeStop7-timeStart7;
          document.getElementById(element_id).style.display="none";
          test7=document.getElementById('result7').innerHTML='Реакция зачтена: '+time7/1000+"s";
          document.getElementById('span7').innerHTML = time7/1000;
        }
    //
    </script>

  </body>
</html>
