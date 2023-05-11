<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../styles/thinking.css">

  </head>
  <body>
    <div class="header">
        <h1>Page navigation</h1>
    </div>

    <div class="main">
      <h1 style="font-size:20px;">Оценка мышления</h1>
      <button id="infoButton" type="button" name="button">Справка</button>
      <div id="infoDiv" style="display:none;"></div>

      <div id="test" class="test">
        <input type="button" id="start"class="button" value="Начать тест">
        <div id="progress" style="display:none;">
          Выполнено: 0/10
        </div>
        <div id="reaction1" class="reactions" style="display:none;">
          <div id="question1">1)Дан ряд чисел 2, 4, 8, 16, 32... <br>Напишите следующий элемент</div>
          <input id="input1" type="text"><br>
          <input id="next1" type="button" value="Далее">
        </div>

        <div id="reaction2" style="display:none;">
          <div id="question2">2)Задание на аналогии.<br>Дана пара слов 'Физика-наука' <br>
          Выберите номер аналога, то есть пары слов связанных с предыдущей такой же логической связью<br>
          <input id="21" type="radio" name="radio2" value="Овца-стадо" onclick="answerTwo('21')">Овца-стадо<br>
          <input id="22" type="radio" name="radio2" value="Малина-ягода" onclick="answerTwo('22')">Малина-ягода<br>
          <input id="23" type="radio" name="radio2" value="Море-океан" onclick="answerTwo('23')">Море-океан<br>
          <input id="24" type="radio" name="radio2" value="Свет-темнота" onclick="answerTwo('24')">Свет-темнота<br>

          </div>

        </div>

        <div id="reaction3" style="display:none;">
          <div id="question3">3)Дан ряд чисел 500, 400, 300, 200... <br>Напишите следующий элемент</div>
          <input id="input3" type="text">
          <input id="next3" type="button" value="Далее">
        </div>

        <div id="reaction4" style="display:none;">
            <div id="question4">
              4)Установление закономерностей<br>
              Сущность задания состоит в поиске слов с заданным порядком букв.<br>
              Все буквы в слове закодированы условными знаками: х 0 * + - ? !<br>
              Так, например, строке ! * - ! соответствует слово 'грог',<br>
              (первая и последняя буквы одинаковы, а остальные - разные)<br>
              Даны условные знаки: ! x + x <br>
              Установите закономерность со словом и выберите номер слова<br>
              <input id="41" type="radio" name="radio4" onclick="answerFour('41')">Рана<br>
              <input id="42" type="radio" name="radio4" onclick="answerFour('42')">Клад<br>
              <input id="43" type="radio" name="radio4" onclick="answerFour('43')">Пила<br>
              <input id="44" type="radio" name="radio4" onclick="answerFour('44')">Вода<br>
            </div>
        </div>

        <div id="reaction5" style="display:none;">
          <div id="question5">5)Дана последовательность фибоначчи:0, 1, 1, 2, 3, 5, 8, 13, 21, 34...<br>Укажите следующий элемент</div>
          <input id="input5" type="text">
          <input id="next5" type="button" value="Далее">
        </div>

        <div id="reaction6" style="display:none;">
          <div id="question6">6)Дана последовательность чисел:3,9,27,81...<br>Укажите следующий элемент</div>
          <input id="input6" type="text">
          <input id="next6" type="button" value="Далее">
        </div>

        <div id="reaction7" style="display:none;">
          <div id="question7">7)Установите закономерность и укажите номер:
          <br>Занятием противоположным отдыху является:<br>
          <input id="71" type="radio" name="radio7" onclick="answerSeven('71')">Забота<br>
          <input id="72" type="radio" name="radio7" onclick="answerSeven('72')">Труд<br>
          <input id="73" type="radio" name="radio7" onclick="answerSeven('73')">Усталость<br>
          <input id="74" type="radio" name="radio7" onclick="answerSeven('74')">Прогулка<br>

          </div>

        </div>

        <div id="reaction8" style="display:none;">
          <div id="question8">8)Продолжите числовой ряд:972,875,788,710...</div>
          <input id="input8" type="text">
          <input id="next8" type="button" value="Далее">
        </div>

        <div id="reaction9" style="display:none;">
          <div id="question9">9)Классификация.<br>
            Даны два слова, определите принадлежность к одному классу понятий<br>
            Два слова - хлеб, масло .Укажите номер:<br>
            <input id="91" type="radio" name="radio9" onclick="answerNine('91')">Море<br>
            <input id="92" type="radio" name="radio9" onclick="answerNine('92')">Пища<br>
            <input id="93" type="radio" name="radio9" onclick="answerNine('93')">Город<br>
            <input id="94" type="radio" name="radio9" onclick="answerNine('94')">Поле<br>
          </div>
        </div>

        <div id="reaction10" style="display:none;">
          <div id="question10">10)Продолжите числовой ряд:4,6,12,18,30,42...</div>
          <input id="input10" type="text">
          <input id="next10" type="button" value="Завершить">
        </div>

        <div id="totalResult" style="display:none;">

        </div>

      </div>

    </div>

    <div class="footer"></div>
    <script type="text/javascript" src="../scripts/thinking.js"></script>
  </body>
</html>
