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
          <input id="input1" type="text">
          <input id="button1" type="button" value="Отправить">
          <div id="result1"></div>
          <input id="next1" type="button" value="Далее">
        </div>

        <div id="reaction2" style="display:none;">
          <div id="question2">2)Задание на аналогии.<br>Дана пара слов 'Физика-наука' <br>
          Напишите номер аналога, то есть пары слов связанных с предыдущей такой же логической связью
          <br>1.Овца-стадо
          <br>2.Малина-ягода
          <br>3.Море-океан
          <br>4.Свет-темнота
          </div>
          <input id="input2" type="text">
          <input id="button2" type="button" value="Отправить">
          <div id="result2"></div>
          <input id="next2" type="button" value="Далее">
        </div>

        <div id="reaction3" style="display:none;">
          <div id="question3">3)Дан ряд чисел 500, 400, 300, 200... <br>Напишите следующий элемент</div>
          <input id="input3" type="text">
          <input id="button3" type="button" value="Отправить">
          <div id="result3"></div>
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
              Установите закономерность со словом и укажите номер слова<br>
              1.Рана<br>
              2.Клад<br>
              3.Пила<br>
              4.Вода<br>
              <input id="input4" type="text">
              <input id="button4" type="button" value="Отправить">
              <div id="result4"></div>
              <input id="next4" type="button" value="Далее">
            </div>
        </div>

        <div id="reaction5" style="display:none;">
          <div id="question5">5)Дана последовательность фибоначчи:0, 1, 1, 2, 3, 5, 8, 13, 21, 34...<br>Укажите следующий элемент</div>
          <input id="input5" type="text">
          <input id="button5" type="button" value="Отправить">
          <div id="result5"></div>
          <input id="next5" type="button" value="Далее">
        </div>

        <div id="reaction6" style="display:none;">
          <div id="question6">6)Дана последовательность чисел:3,9,27,81...<br>Укажите следующий элемент</div>
          <input id="input6" type="text">
          <input id="button6" type="button" value="Отправить">
          <div id="result6"></div>
          <input id="next6" type="button" value="Далее">
        </div>

        <div id="reaction7" style="display:none;">
          <div id="question7">7)Установите закономерность и укажите номер:
          <br>Занятием противоположным отдыху является:<br>
          1.Забота<br>
          2.Труд<br>
          3.Усталость<br>
          4.Прогулка<br>
          </div>
          <input id="input7" type="text">
          <input id="button7" type="button" value="Отправить">
          <div id="result7"></div>
          <input id="next7" type="button" value="Далее">
        </div>

        <div id="reaction8" style="display:none;">
          <div id="question8">8)Продолжите числовой ряд:972,875,788,710...</div>
          <input id="input8" type="text">
          <input id="button8" type="button" value="Отправить">
          <div id="result8"></div>
          <input id="next8" type="button" value="Далее">
        </div>

        <div id="reaction9" style="display:none;">
          <div id="question9">9)Классификация.<br>
            Даны два слова, определите принадлежность к одному классу понятий<br>
            Два слова - хлеб, масло .Укажите номер:<br>
            1.Море<br>
            2.Пища<br>
            3.Город<br>
            4.Поле<br>
          </div>
          <input id="input9" type="text">
          <input id="button9" type="button" value="Отправить">
          <div id="result9"></div>
          <input id="next9" type="button" value="Далее">
        </div>

        <div id="reaction10" style="display:none;">
          <div id="question10">10)Продолжите числовой ряд:4,6,12,18,30,42...</div>
          <input id="input10" type="text">
          <input id="button10" type="button" value="Отправить">
          <div id="result10"></div>
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
