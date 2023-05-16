<!DOCTYPE html>
<html>
<head>
 <title>Красно-черная таблица</title>
 <style>
  table {
   border-collapse: collapse;
  }
  td {
   width: 50px;
   height: 50px;
   border: 1px solid black;
  }
  .red {
   background-color: red;
  }
  .black {
   background-color: black;
  }
 </style>
</head>
<body>
 <h1>Красно-черная таблица</h1>
 <table>
  <tr>
   <td class="red"></td>
   <td class="black"></td>
   <td class="red"></td>
   <td class="black"></td>
   <td class="red"></td>
   <td class="black"></td>
   <td class="red"></td>
   <td class="black"></td>
  </tr>
  <tr>
   <td class="black"></td>
   <td class="red"></td>
   <td class="black"></td>
   <td class="red"></td>
   <td class="black"></td>
   <td class="red"></td>
   <td class="black"></td>
   <td class="red"></td>
  </tr>
  <tr>
   <td class="red"></td>
   <td class="black"></td>
   <td class="red"></td>
   <td class="black"></td>
   <td class="red"></td>
   <td class="black"></td>
   <td class="red"></td>
   <td class="black"></td>
  </tr>
  <tr>
   <td class="black"></td>
   <td class="red"></td>
   <td class="black"></td>
   <td class="red"></td>
   <td class="black"></td>
   <td class="red"></td>
   <td class="black"></td>
   <td class="red"></td>
  </tr>
  <tr>
   <td class="red"></td>
   <td class="black"></td>
   <td class="red"></td>
   <td class="black"></td>
   <td class="red"></td>
   <td class="black"></td>
   <td class="red"></td>
   <td class="black"></td>
  </tr>
 </table>

 <p>Правильных кликов: <span id="correct">0</span></p>
 <p>Неправильных кликов: <span id="incorrect">0</span></p>

 <script>
 var correctClicks = 0;
var incorrectClicks = 0;

document.querySelectorAll("td").forEach(function(td) {
 td.onclick = function() {
  if (this.classList.contains("red")) {
   correctClicks++;
  } else {
   incorrectClicks++;
  }
  document.getElementById("correct").innerHTML = correctClicks;
  document.getElementById("incorrect").innerHTML = incorrectClicks;
 };
});
 </script>
</body>
</html>
