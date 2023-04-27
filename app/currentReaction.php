<!DOCTYPE html>
<!-- current version -->
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="second.css">
  </head>
  <body onload="fonload();">
    <?php session_start(); ?>
    <div class="header">
        Реакции
    </div>
    <div class="main">
      <div id="progress"></div>

      <div id="div1">
        <p>1.Первая реакция</p>
        <button id="buttonReaction1" type="button" name="button" onclick="showHide('reaction1')">Скрыть/показать</button>
        <div id="reaction1" style="display:none;">
          <p>Оценка скорости реакции на свет.<br>
          При нажатии на кнопку 'Start test' через какое-то время изменится цвет фона.Когда он изменится нажмите 'Enter'</p>
          <div id="innerTextOne">Выполнено попыток:0</div>
          <button id="startOne" type="button" name="button" onclick="startTestOne()">Start test</button><br>
          <button id="test1" type="button" name="button" onclick="resultOne()">Нажмите сюда</button><br>
          <div id="result1"></div>
        </div>
        <div id="totalResult1"></div>
      </div>

      <div id="div2">
        <p>2.Вторая реакция</p>
        <button id="buttonReaction2" type="button" name="button" onclick="showHide('reaction2')">Скрыть/показать</button>
        <div id="reaction2" style="display:none;">
          <p>Оценка скорости реакции на звук</p>
          <audio id="audioOne">
            <source src="ul-trazvuk-pisk.mp3" type="audio/mp3">
          </audio>
          <div>
            <div id="innerTextTwo">Выполнено попыток:0</div>
            <button type="button" name="button" onclick="play()">Start test</button><br>
            <button type="button" name="button" onclick="stop()">Нажмите сюда</button>
            <div id="result2"></div>
          </div>
        </div>
        <div id="totalResult2"></div>
      </div>

      <div id="div3">
        <p>3.Третья реакция</p>
        <button id="buttonReaction3" type="button" name="button" onclick="showHide('reaction3')">Скрыть/показать</button>
        <div id="reaction3" style="display:none;">
          <p>Оценка реакции на изменение цветов</p>

          <h1>Три блока с кнопками</h1>
          <button type="button" name="button" onclick="startThreeTest()">Старт теста</button><br>
          <div class="block" id="block11">
            <div class="blocks" id="block1">

            </div><button id="button1" onclick="resultThree('button1')">Green</button>
          </div>

          <div class="block" id="block22">
            <div class="blocks" id="block2">

            </div><button id="button2" onclick="resultThree('button2')">Red</button>
          </div>

          <div class="block" id="block33">
            <div class="blocks" id="block3">

            </div><button id="button3" onclick="resultThree('button3')">Blue</button>
          </div>

          <div id="result31"></div>
          <div id="result32"></div>
          <div id="result33"></div>
        </div>
          <div id="result3"></div>
      </div>

      <div id="div4">
        <p>4.Четвертая реакция</p>
        <button id="buttonReaction4" type="button" name="button" onclick="showHide('reaction4')">Скрыть/показать</button>
        <div id="reaction4" style="display:none;">
          <p>Оценка на скорость реакции на сложный звуковой сигнал - сложение в уме</p>
          <p>При нажатии на кнопку 'Начать тест' будет продиктована запись сложения двух чисел.<br>
          Нужно будет прослушать и нажать на кнопку 'четное' если результат четный и на кнопку 'нечетное' если результат нечетный.</p>
          <button type="button" name="button" onclick="testFour()" style="margin-left:25px;">Начать тест</button><br>
            <audio id="audioTwo">
              <source src="сложение.mp3" type="audio/mp3">
            </audio>
            <button id="d1" type="button" name="button" onclick="checkDigit('d1')">Четное</button>
            <button id="d2" type="button" name="button" onclick="checkDigit('d2')">Нечетное</button><br>
            <div id="innerText4"></div>
        </div>
        <div id="result4"></div>
      </div>

      <div id="div5">
        <p>5.Пятая реакция</p>
        <button id="buttonReaction5" type="button" name="button" onclick="showHide('reaction5')">Скрыть/показать</button>
        <div id="reaction5" style="display:none;">
          <p>Оценка скорости реакции на сложение в уме</p>
          <p>При нажатии на кнопку 'Показать пример' будет показано выражение сложения 2 чисел.</p>
          <button type="button" name="button" onclick="testFive('reaction55')" style="margin-left:10px;">Показать пример</button>
          <div id="reaction55" style="display:none;">
            Сложите в уме 12+5 и оцените ответ на четность/нечетность
          </div><br>
          <button id="d51" type="button" name="button" onclick="checkDigitNew('d51')">Четный</button>
          <button id="d52" type="button" name="button" onclick="checkDigitNew('d52')">Нечетный</button>
          <div id="innerText5"></div>
        </div>
        <div id="result5"></div>
      </div>

      <div id="div6">
        <p>6.Результаты</p>
        <button type="button" name="button" onclick="showHide('reaction6')">Скрыть/показать</button>
        <div id="reaction6" style="display:none;">
          <table class="table">
            <tr>
              <th>Ид</th><th>Пол</th><th>Возраст</th><th>Результат1</th><th>Результат2</th>
              <th>Результат3</th><th>Результат4</th><th>Результат5</th>
            </tr>
            <td><?php echo $_SESSION['id']; ?></td>
            <td><?php echo $_SESSION['pol'] ?></td>
            <td><?php echo $_SESSION['age'] ?></td>
            <td><span id="span1"></span></td>
            <td><span id="span2"></span></td>
            <td><span id="span3"></span></td>
            <td><span id="span4"></span></td>
            <td><span id="span5"></span></td>
          </table>
        </div>
      </div>

      <div class="">

      </div>

    </div>
    <script type="text/javascript">
      //general

      var countProgress=0;


      function showHide(id){
        var obj = document.getElementById(id);
        if(obj.style.display != 'block'){
          obj.style.display = 'block';
        }else {
          obj.style.display = 'none';
        }
      }

      //general stop

      //1

      var timeStart1;
      var timeStop1;
      var time1;
      var times1=new Array(3);
      var clickCount1=0;
      function startTestOne(){
          clickCount1++;
          setTimeout(function(){
            var color = '#' + Math.floor(Math.random()*16777215).toString(16);
            document.body.style.backgroundColor= color;
            timeStart1 = new Date().getTime();
          }, 1000);
      }

      function resultOne(){
          document.body.style.backgroundColor= 'white';
          timeStop1 = new Date().getTime();
          time1=timeStop1 - timeStart1;
          times1[clickCount1 - 1]=time1;

          var sum1=0;
          var average1=0;
          for(let i=0;i<times1.length;i++){
            if(times1[i] == undefined) times1[i] = 0;
            sum1+=times1[i];
          }
          average1 = (sum1/times1.length)/1000;

          document.getElementById('result1').innerHTML = 'Текущий результат:'+time1/1000+'s'+'<br>'+'Средний результат:'+average1.toFixed(2)+"s";
          document.getElementById('innerTextOne').innerHTML = 'Выполнено попыток:'+clickCount1;
          if(clickCount1==3){
            countProgress++;
            document.getElementById('progress').innerHTML="Прогресс: "+countProgress+"/5";
            document.getElementById('reaction1').style.display = 'none';
            document.getElementById('totalResult1').innerHTML ='Выполнено 30 попыток.'+'<br>'+'Итоговый результат:'+average1.toFixed(2)+'s';
            document.getElementById("buttonReaction1").disabled = true;
            document.getElementById('span1').innerHTML = average1.toFixed(2);
          }
      }

      //1 stop

      //2

      var timeStart2;
      var timeStop2;
      var times2=new Array(30);
      var clickCount2=0;

      var audio = document.getElementById("audioOne");

      function play(){
        clickCount2++;
        setTimeout(function(){
          audio.play();
          timeStart2=new Date().getTime();
        },1000);
      }
      function stop(){
        audio.pause();
        timeStop2 = new Date().getTime();
        resultTwo();
      }
      function resultTwo(){
          let time2=timeStop2-timeStart2;
          times2[clickCount2 - 1]=time2;

          var sum2=0;
          var average2=0;
          for(let i=0;i<times2.length;i++){
            if(times2[i] == undefined) times2[i] = 0;
            sum2+=times2[i];
          }
          average2 = (sum2/times2.length)/1000;

          document.getElementById('result2').innerHTML = 'Текущий результат:'+time2/1000+'s'+'<br>'+'Средний результат:'+average2.toFixed(2)+"s";
          document.getElementById('innerTextTwo').innerHTML = 'Выполнено попыток:'+clickCount2;
          if(clickCount2==30){
            audio.pause();
            countProgress++;
            document.getElementById('progress').innerHTML="Прогресс: "+countProgress+"/5";
            document.getElementById('reaction2').style.display = 'none';
            document.getElementById('totalResult2').innerHTML ='Выполнено 30 попыток.'+'<br>'+'Итоговый результат:'+average2.toFixed(2)+'s';
            document.getElementById("buttonReaction2").disabled = true;
            document.getElementById('span2').innerHTML = average2.toFixed(2);
          }
      }

      //2 stop

      //3
      var colors=['red', 'green','blue'];
      var ids=['block1','block2','block3'];
      var color;
      var id;
      var interval3;

      let timeStart3;
      let timeStop3;
      var time31;
      var time32;
      var time33;
      var allTime=0;

      function startThreeTest(){
          interval3 =setInterval(function(){
          color = colors[Math.floor(Math.random()*colors.length)];
          id=ids[Math.floor(Math.random()*ids.length)];
          document.getElementById(id).style.backgroundColor = color;
          timeStart3 = new Date().getTime();
        }, 1000);
      }

      function resultThree(id){
          switch (id) {
            case 'button1':
              if(color == 'green'){
                document.getElementById('result31').innerHTML = 'Цвет выбран верно';
                document.getElementById("button1").disabled = true;
                timeStop3=new Date().getTime();
                time31 = timeStop3-timeStart3;
                delete timeStart3;
              }else if(color!='green') document.getElementById('result31').innerHTML = 'Цвет выбран неверно';
              delete timeStart3;
              break;
            case 'button2':
              if(color == 'red'){
                document.getElementById('result32').innerHTML = 'Цвет выбран верно';
                document.getElementById("button2").disabled = true;
                timeStop3=new Date().getTime();
                time32 = timeStop3-timeStart3;
                delete timeStart3;
              }else if(color!='red') document.getElementById('result32').innerHTML = 'Цвет выбран неверно';
                delete timeStart3;
                break;
            case 'button3':
              if(color == 'blue'){
                document.getElementById('result33').innerHTML = 'Цвет выбран верно';
                document.getElementById("button3").disabled = true;
                timeStop3=new Date().getTime();
                time33 = timeStop3-timeStart3;
                delete timeStart3;
              }else if(color!='blue') document.getElementById('result33').innerHTML = 'Цвет выбран неверно';
                delete timeStart3;
                break;
            default:
          }
          if((document.getElementById("button1").disabled==true)&&(document.getElementById("button2").disabled==true)&&(document.getElementById("button3").disabled==true)){
              clearInterval(interval3);
              // document.getElementById('block1').style.backgroundColor = 'white';
              // document.getElementById('block2').style.backgroundColor = 'white';
              // document.getElementById('block3').style.backgroundColor = 'white';
              document.getElementById('buttonReaction3').disabled = true;
              document.getElementById('reaction3').style.display = 'none';
              allTime = ((time31+time32+time33)/3)/1000;
              document.getElementById('result3').innerHTML = 'Среднее время выполнения:'+allTime+'s';
              countProgress++;
              document.getElementById('progress').innerHTML="Прогресс: "+countProgress+"/5";
              document.getElementById('span3').innerHTML = allTime.toFixed(2);
          }
      }

      //3 stop

      //4
      var audioTwo = document.getElementById("audioTwo");
      var timeStart4;
      var timeStop4;
      var times4=new Array(30);
      var time4;
      clickCount4=0;

      function testFour(){
        audioTwo.play();
        timeStart4 = new Date().getTime();
        document.getElementById("d1").disabled=false;
        document.getElementById("d2").disabled=false;
      }

      var curId;
      function checkDigit(digitId){
        curId = digitId;
        if(digitId == 'd1'){
          document.getElementById('innerText4').innerHTML = 'Ответ неверный';
        }else if (digitId == 'd2'){
          clickCount4++;
          timeStop4 = new Date().getTime();
          time4 = (timeStop4 - timeStart4)-1000;
          times4[clickCount4 - 1]=time4;

          var sum4=0;
          var average4=0;
          for(let i=0;i<times4.length;i++){
            if(times4[i] == undefined) times4[i] = 0;
            sum4+=times4[i];
          }
          average4 = (sum4/times4.length)/1000;

          document.getElementById('result4').innerHTML = 'Ответ верный.'+'Время реакции:'+time4/1000 +'s.'+'Средний результат:'+average4.toFixed(2);
          document.getElementById('innerText4').innerHTML ='Выполнено попыток:' + clickCount4;
          document.getElementById("d1").disabled=true;
          document.getElementById("d2").disabled=true;

          if(clickCount4 == 30){
            countProgress++;
            document.getElementById('progress').innerHTML="Прогресс: "+countProgress+"/5";
            document.getElementById('reaction4').style.display = 'none';
            document.getElementById('result4').innerHTML ='Выполнено 30 попыток.Итоговый результат:' + average4.toFixed(2);
            document.getElementById("buttonReaction4").disabled=true;
            document.getElementById('span4').innerHTML = average4.toFixed(2);
          }
        }
      }
      //4 stop

      //5
      var timeStart5;
      var timeStop5;
      var times5=new Array(30);
      var time5;
      var exampleId;
      var clickCount5=0;
      function testFive(Id){
        exampleId = Id;
        document.getElementById(Id).style.display = 'block';
        timeStart5 = new Date().getTime();
        document.getElementById("d51").disabled=false;
        document.getElementById("d52").disabled=false;
      }
      function checkDigitNew(cliclDigitId){
        if(cliclDigitId == 'd51'){

            document.getElementById('innerText5').innerHTML = 'Ответ неверный';
        } else if(cliclDigitId = 'd52'){
          clickCount5++;
          timeStop5 = new Date().getTime();
          time5 = timeStop5 - timeStart5;
          times5[clickCount5 - 1] = time5;

          var sum5=0;
          var average5=0;
          for(let i=0;i<times5.length;i++){
            if(times5[i] == undefined) times5[i] = 0;
            sum5+=times5[i];
          }
          average5 = (sum5/times5.length)/1000;

          document.getElementById('result5').innerHTML = 'Ответ верный.'+'Время реакции:'+time5/1000 +'s.'+'Средний результат:'+average5.toFixed(2);
          document.getElementById('innerText5').innerHTML ='Выполнено попыток:' + clickCount5;
          document.getElementById(exampleId).style.display = 'none';
          document.getElementById("d51").disabled=true;
          document.getElementById("d52").disabled=true;

          if(clickCount5 == 30){
            countProgress++;
            document.getElementById('progress').innerHTML="Прогресс: "+countProgress+"/5";
            document.getElementById('reaction5').style.display = 'none';
            document.getElementById('result5').innerHTML ='Выполнено 30 попыток.Итоговый результат:' + average5.toFixed(2);
            document.getElementById("buttonReaction5").disabled=true;
            document.getElementById('span5').innerHTML = average5.toFixed(2);
          }
        }
      }
      //5 stop

      //6

      //6 stop

      //body fonload
      function fonload(){
        document.getElementById('progress').innerHTML="Прогресс: "+countProgress+"/5";
      }

    </script>
  </body>
</html>
