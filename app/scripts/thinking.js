var trueAnswer=0;
start.onclick=function(){
  document.getElementById('start').style.display = 'none';
  document.getElementById('progress').style.display = 'block';
  document.getElementById('reaction1').style.display = 'block';
}

button1.onclick=function(){
  var value1 = document.getElementById('input1').value;

  if(value1 == '64'){
    document.getElementById('result1').innerHTML = 'Правильно';
    trueAnswer++;
  } else{
    document.getElementById('result1').innerHTML = 'Неправильно.Верный ответ - 64';
  }
}

next1.onclick=function(){
  document.getElementById('reaction1').style.display = 'none';
  document.getElementById('reaction2').style.display = 'block';
  document.getElementById('progress').innerHTML = 'Выполнено: 1/10';
}

button2.onclick=function(){
  var value2 = document.getElementById('input2').value;

  if(value2 == '3'){
    document.getElementById('result2').innerHTML = 'Правильно';
    trueAnswer++;
  } else{
    document.getElementById('result2').innerHTML = 'Неправильно.Верный ответ - 3';
  }
}

next2.onclick=function(){
  document.getElementById('reaction2').style.display = 'none';
  document.getElementById('reaction3').style.display = 'block';
  document.getElementById('progress').innerHTML = 'Выполнено: 2/10';
}

button3.onclick=function(){
  var value3 = document.getElementById('input3').value;

  if(value3 == '100'){
    document.getElementById('result3').innerHTML = 'Правильно';
    trueAnswer++;
  } else{
    document.getElementById('result3').innerHTML = 'Неправильно.Верный ответ - 100';
  }
}

next3.onclick=function(){
  document.getElementById('reaction3').style.display = 'none';
  document.getElementById('reaction4').style.display = 'block';
  document.getElementById('progress').innerHTML = 'Выполнено: 3/10';
}

button4.onclick=function(){
  var value4 = document.getElementById('input4').value;

  if(value4 == '1'){
    document.getElementById('result4').innerHTML = 'Правильно';
    trueAnswer++;
  } else{
    document.getElementById('result4').innerHTML = 'Неправильно.Верный ответ - 1';
  }
}

next4.onclick=function(){
  document.getElementById('reaction4').style.display = 'none';
  document.getElementById('reaction5').style.display = 'block';
  document.getElementById('progress').innerHTML = 'Выполнено: 4/10';
}

button5.onclick=function(){
  var value5 = document.getElementById('input5').value;

  if(value5 == '55'){
    document.getElementById('result5').innerHTML = 'Правильно';
    trueAnswer++;
  } else{
    document.getElementById('result5').innerHTML = 'Неправильно.Верный ответ - 55';
  }
}

next5.onclick=function(){
  document.getElementById('reaction5').style.display = 'none';
  document.getElementById('reaction6').style.display = 'block';
  document.getElementById('progress').innerHTML = 'Выполнено: 5/10';
}

button6.onclick=function(){
  var value6 = document.getElementById('input6').value;

  if(value6 == '243'){
    document.getElementById('result6').innerHTML = 'Правильно';
    trueAnswer++;
  } else{
    document.getElementById('result6').innerHTML = 'Неправильно.Верный ответ - 243';
  }
}
next6.onclick=function(){
  document.getElementById('reaction6').style.display = 'none';
  document.getElementById('reaction7').style.display = 'block';
  document.getElementById('progress').innerHTML = 'Выполнено: 6/10';
}
button7.onclick=function(){
  var value7 = document.getElementById('input7').value;

  if(value7 == '2'){
    document.getElementById('result7').innerHTML = 'Правильно';
    trueAnswer++;
  } else{
    document.getElementById('result7').innerHTML = 'Неправильно.Верный ответ - 2';
  }
}
next7.onclick=function(){
  document.getElementById('reaction7').style.display = 'none';
  document.getElementById('reaction8').style.display = 'block';
  document.getElementById('progress').innerHTML = 'Выполнено: 7/10';
}
button8.onclick=function(){
  var value8 = document.getElementById('input8').value;

  if(value8 == '639'){
    document.getElementById('result8').innerHTML = 'Правильно';
    trueAnswer++;
  } else{
    document.getElementById('result8').innerHTML = 'Неправильно.Верный ответ - 639';
  }
}
next8.onclick=function(){
  document.getElementById('reaction8').style.display = 'none';
  document.getElementById('reaction9').style.display = 'block';
  document.getElementById('progress').innerHTML = 'Выполнено: 8/10';
}
button9.onclick=function(){
  var value9 = document.getElementById('input9').value;

  if(value9 == '2'){
    document.getElementById('result9').innerHTML = 'Правильно';
    trueAnswer++;
  } else{
    document.getElementById('result9').innerHTML = 'Неправильно.Верный ответ - 2';
  }
}
next9.onclick=function(){
  document.getElementById('reaction9').style.display = 'none';
  document.getElementById('reaction10').style.display = 'block';
  document.getElementById('progress').innerHTML = 'Выполнено: 9/10';
}
button10.onclick=function(){
  var value10 = document.getElementById('input10').value;

  if(value10 == '60'){
    document.getElementById('result10').innerHTML = 'Правильно';
    trueAnswer++;
  } else{
    document.getElementById('result10').innerHTML = 'Неправильно.Верный ответ - 60';
  }
}
next10.onclick=function(){
  document.getElementById('reaction10').style.display = 'none';
  document.getElementById('totalResult').style.display = 'block';
  document.getElementById('totalResult').innerHTML = 'Итого правильных ответов - ' +(trueAnswer/10)*100 +' %';
}
