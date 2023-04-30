<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Тест на реакции</title>
    <link rel="stylesheet" href="reaction.css">
  </head>
  <body>
    <div class="header">
        Тест
      </div>
      <div class="main">

        <div id="vopros1" style="display:block;">
        <p>Вопрос 1</p>
        <p>Введите пол: <input type="text" id="z_1"></p>
        </div>

        <div id="vopros2" style="display:none">
          <p>Вопрос 2</p>
          <p>Введите возраст:<input type="text" id="z_t"></p>
        </div>

        <div id="vopros3" style="display:none;">
        <p>Вопрос 3</p>
        <p>Оценка реакции на свет</p>
        <p>Здесь должна быт рекции на свет</p>
        <img id="img_1" style="display:none;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRnD2J5ZNYht8NIShfcHm9mA1FUD_ky2As88PH1gpWpF6nXWMNJ8GHNx0bUYQTiNNcN1c8&usqp=CAU">
        <button id="submit" onclick="myImg()">Показать/Скрыть картинку</button>
        </div>

        <div id="vopros4" style="display:none;">
        <p>Вопрос 4</p>
        </div>

        <div id="vopros5" style="display:none;">
        <p>Вопрос 5</p>
        </div>

        <div id="vopros6" style="display:none;">
        <p>Вопрос 6</p>
        </div>

        <div id="vopros7" style="display:none;">
        <p>Вопрос 7</p>
        <p>Оценка скорости рекции на сложении в уме</p>
        <button onclick="proverit();">Проверить</button>
        <div id="rezultat"></div>
        </div>

        <button id="kn_sl" onclick="sled_vopr();">Следующий вопрос</button>

        <script>
        var t1;
        var start;
        var stop;
        function proverit(){
        otv_uch_1 = document.getElementById('z_1').value;
        otv_uch_2 = document.getElementById('z_t').value;
        document.getElementById('rezultat').innerHTML = "Здесь должна быть обработка полученных значений, какой-то результат"+t1;
        }

        function sled_vopr(){
          if(document.getElementById('vopros6').style.display == "block"){
            document.getElementById('vopros6').style.display = "none";
            document.getElementById('vopros7').style.display = "block";
      document.getElementById('kn_sl').style.display = "none";
      document.getElementById('kn_pr').style.display = "block";
  }

  if (document.getElementById('vopros5').style.display == "block") {
    document.getElementById('vopros5').style.display = "none";
    document.getElementById('vopros6').style.display = "block";
  }

  if (document.getElementById('vopros4').style.display == "block") {
    document.getElementById('vopros4').style.display = "none";
    document.getElementById('vopros5').style.display = "block";
  }

if (document.getElementById('vopros3').style.display == "block") {
    document.getElementById('vopros3').style.display = "none";
    document.getElementById('vopros4').style.display = "block";
}

if (document.getElementById('vopros2').style.display == "block") {
  document.getElementById('vopros2').style.display = "none";
  document.getElementById('vopros3').style.display = "block";
}

  if(document.getElementById('vopros1').style.display == "block"){
      document.getElementById('vopros1').style.display = "none";
      document.getElementById('vopros2').style.display = "block";
  }
}


  function myImg() {
  let elem = document.getElementById('img_1'); // получаем элемент по ID
  let style = getComputedStyle(elem); // получаем его стили
  if (style.display === 'none') {
    document.getElementById('img_1').style.display='block';
    } else if (style.display !== 'none') {
    document.getElementById('img_1').style.display='none';
  }
  if(style.display == 'block'){
    start =new Date;
  }
  if (style.display == 'none') {
    stop=new Date;
  }
}
t1 = stop -start;
</script>
  </body>
</html>
