<!DOCTYPE html>
<html>
<head>
 <title>Memory Test</title>
 <style>
  body {
   background-color: white;
   text-align: center;
   font-size: 24px;
  }

  button {
   font-size: 18px;
   margin: 10px;
   padding: 10px;
   border-radius: 5px;
   cursor: pointer;
  }


 </style>
</head>
<body>
 <h1>Memory Test</h1>
 <button id="startBtn">Start</button>

 <div id="choices"></div>

 <p id="result"></p>

 <script>
  var colors = ['blue', 'red', 'green'];
  var correctColor, startTime, endTime, reactionTime, totalReactionTime = 0, correctCount = 0, totalCount = 0, correctTotalTime=0, incorrectTotalTime=0;


  function startTest() {
   document.getElementById('startBtn').style.display = 'none';
   document.body.style.backgroundColor = getRandomColor();
   setTimeout(function() {
    document.body.style.backgroundColor = 'white';
    showChoices();
    startTime = new Date().getTime();
  }, 500);
  }

  function getRandomColor() {
   return colors[Math.floor(Math.random() * colors.length)];
  }

  function showChoices() {
   document.getElementById('choices').innerHTML = '';
   correctColor = getRandomColor();
   for (var i = 0; i < colors.length; i++) {
    var btn = document.createElement('button');
    btn.innerHTML = colors[i];
    btn.style.backgroundColor = colors[i];
    btn.onclick = checkAnswer;
    document.getElementById('choices').appendChild(btn);
   }
  }

  function checkAnswer() {
   endTime = new Date().getTime();
   reactionTime = endTime - startTime;
   totalCount++;
   if (this.innerHTML == correctColor) {
    correctCount++;
    correctTotalTime+=reactionTime;
    document.getElementById('result').innerHTML = 'Время реакции: ' + reactionTime + 'ms. Текущих попыток: '+ totalCount;
   } else {
     incorrectTotalTime+=reactionTime;
    document.getElementById('result').innerHTML = 'Время реакции: ' + reactionTime + 'ms. Текущих попыток: ' + totalCount;
   }
   if (totalCount == 10) {
    endTest();
   } else {
    setTimeout(function() {
     document.body.style.backgroundColor = getRandomColor();
     setTimeout(function() {
      document.body.style.backgroundColor = 'white';
      showChoices();
      startTime = new Date().getTime();
    }, 500);
  }, 500);
   }
  }

  function endTest() {
   document.body.style.backgroundColor = 'white';
   document.getElementById('choices').innerHTML = '';
   document.getElementById('result').innerHTML = 'Тест завершен. Правильных попыток: ' + correctCount + '/' + totalCount + '. Среднее время для правильных ответов: ' + (correctTotalTime / correctCount).toFixed(2) + 'ms. Среднее время для неправильных ответов: ' + (incorrectTotalTime/(totalCount-correctCount)).toFixed(2) + 'ms.';
  }

  document.getElementById('startBtn').onclick = startTest;
 </script>
</body>
</html>
