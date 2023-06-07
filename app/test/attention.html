<!DOCTYPE html>
<html>
<head>
 <title>Тест на внимание</title>
 <style type="text/css">
  body {
   background-color: white;
   text-align: center;
  }
  button {
   margin: 10px;
   padding: 10px;
   border-radius: 5px;
   font-size: 16px;
   cursor: pointer;
  }
 </style>
</head>
<body>
 <h1>Тест на внимание</h1>
 <button id="startButton">Начать тест</button>
 <div id="colorButtons" style="display: none;">
  <button id="redButton" style="background-color: red;">Красный</button>
  <button id="blueButton" style="background-color: blue;">Синий</button>
  <button id="greenButton" style="background-color: green;">Зеленый</button>
  <button id="yellowButton" style="background-color: yellow;">Желтый</button>
  <p id="currentResult"></p>
  <p id="attempts"></p>
 </div>
 <div id="result" style="display: none;">
  <h2>Результаты теста</h2>
  <p>Количество правильных нажатий: <span id="correctCount"></span></p>
  <p>Среднее время на правильные нажатия: <span id="correctTime"></span> мс</p>
  <p>Среднее время на неправильные нажатия: <span id="incorrectTime"></span> мс</p>
 </div>

 <script type="text/javascript">
  var colors = ["red", "blue", "green", "yellow"];
  var correctCount = 0;
  var correctTimeSum = 0;
  var incorrectTimeSum = 0;
  var attemptsCount = 0;
  var reactionTimeStart;

  function startTest() {
   document.getElementById("startButton").style.display = "none";
   document.getElementById("colorButtons").style.display = "block";
   changeBackgroundColor();
  }

  function changeBackgroundColor() {
   var randomColor = colors[Math.floor(Math.random()*colors.length)];
   document.body.style.backgroundColor = randomColor;
   reactionTimeStart = new Date().getTime();
  }

  function endTest() {
    if(correctCount == 0) correctTimeSum=0;
   document.body.style.backgroundColor = "white";
   document.getElementById("colorButtons").style.display = "none";
   document.getElementById("result").style.display = "block";
   document.getElementById("correctCount").innerHTML = correctCount;

   if(correctCount == 10){
     document.getElementById("incorrectTime").innerHTML = '0';
   } else{
     document.getElementById("incorrectTime").innerHTML = Math.round(incorrectTimeSum/(10-correctCount));
   }

   if(correctCount == 0){
     document.getElementById("correctTime").innerHTML = '0';
   }else{
     document.getElementById("correctTime").innerHTML = Math.round(correctTimeSum/correctCount);
   }
  }

  document.getElementById("startButton").addEventListener("click", startTest);

  document.getElementById("redButton").addEventListener("click", function() {
   checkAnswer("red");
  });

  document.getElementById("blueButton").addEventListener("click", function() {
   checkAnswer("blue");
  });

  document.getElementById("greenButton").addEventListener("click", function() {
   checkAnswer("green");
  });

  document.getElementById("yellowButton").addEventListener("click", function() {
   checkAnswer("yellow");
  });

  function checkAnswer(color) {
   attemptsCount++;
   var reactionTimeEnd = new Date().getTime();
   var reactionTime = reactionTimeEnd - reactionTimeStart;
   if (color === document.body.style.backgroundColor) {
    correctCount++;
    correctTimeSum += reactionTime;
   } else {
    incorrectTimeSum += reactionTime;
   }
   document.getElementById("currentResult").innerHTML = "Время реакции: " + reactionTime + " мс";
   document.getElementById("attempts").innerHTML = "Количество попыток: " + attemptsCount;
   if (attemptsCount < 10) {
    changeBackgroundColor();
   } else {
    endTest();
    document.getElementById("currentResult").innerHTML += "";
   }
  }
 </script>
</body>
</html>
