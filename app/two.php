<!DOCTYPE html>
<!--

ЭТО ТЕСТОВЫЙ ФАЙЛ, НУЖНО УДАЛИТЬ

-->
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <button type="button" name="button" onclick="showHide('block_id')">Скрыть/Показать элемент</button>
        <div id="block_id" style="display: none;">
          <img id="img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQMjhZWQOjCJukPGHWen0Rfa2A7PkVT1ore2w&usqp=CAU">
          <button id="button" type="button" name="button" onclick="reaction()">Нажмите сюда</button>

        </div>
        <div id="result" name="result">

        </div>

    <script type="text/javascript">
    var t1;
    var t2;
    var test;
    function showHide(element_id) {
            var obj = document.getElementById(element_id);
              //Если элемент с id-шником element_id существует
              if (document.getElementById(element_id)) {
                  //Записываем ссылку на элемент в переменную obj

                  //Если css-свойство display не block, то:
                  if (obj.style.display != "block") {
                      t1=new Date();

                      changeImage();

                      obj.style.display = "block"; //Показываем элемент
                  }
                  else {obj.style.display = "none";

                    } //Скрываем элемент
              }
          }
        function reaction(){
          t2=new Date();
          var time=t2-t1;
          document.getElementById('block_id').style.display="none";
          test=document.getElementById('result').innerHTML='Реакция зачтена: '+time/1000+"s";
        }
        function returnTest(){
          return test;
        }
        function changeImage(){
        var images='images/blue.png';
        var slider= document.getElementById('img');
        setInterval(
          function(){
            slider.src=images;
          },1000);
        }
    </script>
  </body>
</html>
