var trueAnswer=0;
start.onclick=function(){
  document.getElementById('start').style.display = 'none';
  document.getElementById('progress').style.display = 'block';
  document.getElementById('reaction1').style.display = 'block';
}

next1.onclick=function(){
  var value1 = document.getElementById('input1').value;
  if(value1 == '64') trueAnswer++;
  document.getElementById('reaction1').style.display = 'none';
  document.getElementById('reaction2').style.display = 'block';
  document.getElementById('progress').innerHTML = 'Выполнено: 1/10';
}

function answerTwo(id){
  var value2 = document.getElementById(id);
  if((id == 23) &&(value2.checked)) trueAnswer++;
  document.getElementById('reaction2').style.display = 'none';
  document.getElementById('reaction3').style.display = 'block';
  document.getElementById('progress').innerHTML = 'Выполнено: 2/10';
}

next3.onclick=function(){
  var value3 = document.getElementById('input3').value;
  if(value3 == '100') trueAnswer++;
  document.getElementById('reaction3').style.display = 'none';
  document.getElementById('reaction4').style.display = 'block';
  document.getElementById('progress').innerHTML = 'Выполнено: 3/10';
}

function answerFour(id){
  var value4 = document.getElementById(id);
  if((id == 41) &&(value4.checked)) trueAnswer++;
  document.getElementById('reaction4').style.display = 'none';
  document.getElementById('reaction5').style.display = 'block';
  document.getElementById('progress').innerHTML = 'Выполнено: 4/10';
}

next5.onclick=function(){
  var value5 = document.getElementById('input5').value;
  if(value5 == '55') trueAnswer++;
  document.getElementById('reaction5').style.display = 'none';
  document.getElementById('reaction6').style.display = 'block';
  document.getElementById('progress').innerHTML = 'Выполнено: 5/10';
}

next6.onclick=function(){
  var value6 = document.getElementById('input6').value;
  if(value6 == '243') trueAnswer++;
  document.getElementById('reaction6').style.display = 'none';
  document.getElementById('reaction7').style.display = 'block';
  document.getElementById('progress').innerHTML = 'Выполнено: 6/10';
}

function answerSeven(id){
  var value7 = document.getElementById(id);
  if((id == 72) &&(value7.checked)) trueAnswer++;
  document.getElementById('reaction7').style.display = 'none';
  document.getElementById('reaction8').style.display = 'block';
  document.getElementById('progress').innerHTML = 'Выполнено: 7/10';
}

next8.onclick=function(){
  var value8 = document.getElementById('input8').value;
  if(value8 == '639') trueAnswer++;
  document.getElementById('reaction8').style.display = 'none';
  document.getElementById('reaction9').style.display = 'block';
  document.getElementById('progress').innerHTML = 'Выполнено: 8/10';
}

function answerNine(id){
  var value9 = document.getElementById(id);
  if((id == 92) &&(value9.checked)) trueAnswer++;
  document.getElementById('reaction9').style.display = 'none';
  document.getElementById('reaction10').style.display = 'block';
  document.getElementById('progress').innerHTML = 'Выполнено: 9/10';
}

next10.onclick=function(){
  var value10 = document.getElementById('input10').value;
  if(value10 == '60') trueAnswer++;
  document.getElementById('progress').innerHTML = '';
  document.getElementById('reaction10').style.display = 'none';
  document.getElementById('totalResult').style.display = 'block';
  document.getElementById('totalResult').innerHTML = 'Итого правильных ответов - ' +(trueAnswer/10)*100 +' %';
}
