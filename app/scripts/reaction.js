function clickButton(buttonId){
  hideAllButtons();
  switch (buttonId) {
    case buttonReaction1:
        buttonOne();
      break;
    case buttonReaction2:
        buttonTwo();
      break;
    case buttonReaction3:
        buttonThree();
      break;
    case buttonReaction4:
        buttonFour();
      break;
    case buttonReaction5:
        buttonFive();
      break;
    default: alert('Exception.Reload page.');
  }
}
//1
var trueClickCount1=0;
var falseClickCount1=0;
var color;
var startTime1;
var stopTime1;
var time1;
var interval1;
var times1=new Array(30);
var sum1=0;
var average1=0;
var arrCount1;

var testAllCount1=0;
var falseTest1=0;
var trueTest1=0;

function buttonOne(){
  document.getElementById('reaction1').style.display ='block';
}
function startReactionOne(blockId){
  let time=(Math.random()*3000)+1500;
  interval1= setInterval(function(){

      color = '#' + Math.floor(Math.random()*16777215).toString(16);
      document.getElementById(blockId).style.backgroundColor = color;
      startTime1 = new Date().getTime();
      setTimeout(function(){
        color = 'white';
        document.getElementById(blockId).style.backgroundColor = color;
      }, 1500);

  }, time);
}

function clickButtonOne(){
  if(testAllCount1<3){
    document.getElementById('testAttempt1').innerHTML = 'Идут тестовые попытки.';

    if(color == 'white'){
      document.getElementById('innerResultAttempt1').innerHTML = 'Ложное нажатие.';
      falseTest1++;
      testAllCount1++;
    } else{
      trueTest1++;
      testAllCount1++;
      document.getElementById('innerResultAttempt1').innerHTML = 'Нажатие зачтено.';
      stopTime1=new Date().getTime();
      time1 = (stopTime1-startTime1)/1000;
    }
    document.getElementById('innerResult1').innerHTML = 'Результаты: зачтено нажатий - '+trueTest1 +' , ложных - ' +falseTest1+ ', time - '+time1;
    if((trueClickCount1 == 0) && (testAllCount1 == 3)) {
      document.getElementById('testAttempt1').innerHTML = 'Приготовьтесь к основным попыткам.';
      document.getElementById('innerResult1').innerHTML="";
      document.getElementById('innerResultAttempt1').innerHTML ='';
    }
  } else if(testAllCount1>2){
     document.getElementById('testAttempt1').innerHTML = 'Идут основные попытки.';
      if(color == 'white'){
          falseClickCount1++;
          document.getElementById('innerResultAttempt1').innerHTML = 'Ложное нажатие.';
      } else{
          trueClickCount1++;
          document.getElementById('innerResultAttempt1').innerHTML = 'Нажатие зачтено.';
          stopTime1=new Date().getTime();
          time1 = (stopTime1-startTime1)/1000;

          arrCount1 =trueClickCount1;
          times1[arrCount1 - 1]=time1;


      }
      document.getElementById('innerResult1').innerHTML = 'Результаты: зачтено нажатий : '+trueClickCount1 +' , ложных : ' +falseClickCount1 + ', time : '+time1;
  }
  if(trueClickCount1 == 30){
    clearInterval(interval1);
    document.getElementById('changeColorBlock1').style.backgroundColor = 'white';
    for(let i=0; i<times1.length;i++){
      sum1+=times1[i];
    }
    average1 = (sum1/times1.length);
    document.getElementById('startReaction1').disabled = true;
    document.getElementById('clickButton1').disabled = true;
    document.getElementById('testAttempt1').innerHTML = '';
    document.getElementById('innerResult1').innerHTML = 'Итоговый результат: зачтено нажатий : '+trueClickCount1 +' , ложных : ' +falseClickCount1 + ', average time : '+ average1.toFixed(2);
  }
}

// 1 stop

//2
var trueClickCount2=0;
var falseClickCount2=0;
var falseTest2=0;
var trueTest2=0;
var startTime2;
var stopTime2;
var time2;
var times2=new Array(30);
var testAllCount2=0;
var arrCount2;
var sum2=0;
var average2=0;
var testAllCount3=0;
var falseTest3=0;
var trueTest3=0;
function buttonTwo(){
  document.getElementById('reaction2').style.display ='block';
}
var audio = document.getElementById('audioOne');
var interval2;
var status;
function startReactionTwo(){

  interval2=setInterval(function(){
      setTimeout(function(){
        audio.play();
        startTime2=new Date().getTime();
        status=1;
      },0);

  }, 2000);
}

function clickButtonTwo(){
  if(testAllCount2<3){
    document.getElementById('testAttempt2').innerHTML ='Идут тестовые попытки';
    if(status!=1){
      falseTest2++;
      testAllCount2++;
      document.getElementById('innerResultAttempt2').innerHTML ='Ложное нажатие';
    } else{
      trueTest2++;
      testAllCount2++;
      document.getElementById('innerResultAttempt2').innerHTML ='Нажатие зачтено';
      audio.pause();
      status=0;
    }
    document.getElementById('innerResult2').innerHTML ='Зачтено:'+trueTest2 + '.Ложные:'+falseTest2;
    if((trueClickCount2 == 0)&&(testAllCount2 == 3)){
      document.getElementById('testAttempt2').innerHTML ='Приготовьтесь к основным попыткам';
      document.getElementById('innerResultAttempt2').innerHTML ='';
      document.getElementById('innerResult2').innerHTML ='';
    }
  }
  else if(testAllCount2>2){
    document.getElementById('testAttempt2').innerHTML = 'Идут основные попытки.';
    if(status!=1){
      document.getElementById('innerResultAttempt2').innerHTML ='Ложное нажатие';
      falseClickCount2++;
    } else{
      trueClickCount2++;
      document.getElementById('innerResultAttempt2').innerHTML ='Нажатие зачтено';
      audio.pause();
      stopTime2=new Date().getTime();
      time2=(stopTime2-startTime2)/1000;
      arrCount2 = trueClickCount2;
      times2[arrCount2 -1]=time2;
      status=0;
    }
    document.getElementById('innerResult2').innerHTML = 'Засчитано попыток:'+trueClickCount2+', ложных:'+falseClickCount2+" time:"+time2;
    if(trueClickCount2==30){
      audio.pause();
      clearInterval(interval2);
      audio.pause();

      for(let i=0; i<times2.length;i++){
        sum2+=times2[i];
      }
      average2 = (sum2/times2.length);
      document.getElementById('startReaction2').disabled = true;
      document.getElementById('clickButton2').disabled = true;
      document.getElementById('innerResult2').innerHTML = 'Результаты: засчитано попыток:'+trueClickCount2+', ложных:'+falseClickCount2+", среднее время:"+average2.toFixed(2);
    }
  }
}
//2 stop

//3
var colors=['red','green','blue'];
var blocksId=['block1','block2','block3'];
var interval3;
var color;
var id;
var time3;
var timeStart3;
var timeStop3;
var times3=new Array(3);
var sum3=0;
var average3=0;
var arrCount3=0;
var trueClickCount3=0;
var falseClickCount3=0;
function buttonThree(){
  document.getElementById('reaction3').style.display = 'block';
}
function startReactionThree(){
  interval3 =setInterval(function(){
  color = colors[Math.floor(Math.random()*colors.length)];
  id=blocksId[Math.floor(Math.random()*blocksId.length)];
  document.getElementById(id).style.backgroundColor = color;
  timeStart3 = new Date().getTime();
}, 1000);
}
function changeColor(colorBlockId){
  if(testAllCount3<3){
    document.getElementById('testAttempt3').innerHTML = 'Идут тестовые попытки';
    switch (colorBlockId) {
      case 'block1':
        if(document.getElementById('block1').style.backgroundColor == 'red'){
          trueTest3++;
          testAllCount3++;
          timeStop3=new Date().getTime();
          time3=(timeStop3-timeStart3)/1000;
          document.getElementById('innerResultAttempt3').innerHTML ='Верно выбран красный цвет, время:'+time3;
        } else {
          document.getElementById('innerResultAttempt3').innerHTML ='Блок-1 цвет неверный';
          falseTest3++;
          testAllCount3++;
        }
        break;
      case 'block2':
        if(document.getElementById('block2').style.backgroundColor == 'green'){
          trueTest3++;
          testAllCount3++;
          timeStop3=new Date().getTime();
          time3=(timeStop3-timeStart3)/1000;
          document.getElementById('innerResultAttempt3').innerHTML ='Верно выбран зеленый цвет, время:'+time3;
          } else {
            document.getElementById('innerResultAttempt3').innerHTML ='Блок-2 цвет неверный';
            falseTest3++;
            testAllCount3++;
        }
          break;
      case 'block3':
        if(document.getElementById('block3').style.backgroundColor == 'blue'){
          trueTest3++;
          testAllCount3++;
          timeStop3=new Date().getTime();
          time3=(timeStop3-timeStart3)/1000;
          document.getElementById('innerResultAttempt3').innerHTML ='Верно выбран синий цвет, время:'+time3;
        } else {
          document.getElementById('innerResultAttempt3').innerHTML ='Блок-3 цвет неверный';
          falseTest3++;
          testAllCount3++;
        }
        break;
      default:
    }
    document.getElementById('innerResult3').innerHTML ='Счетчик тестовых попыток:'+testAllCount3;
    if((trueClickCount3 == 0)&&(testAllCount3 == 3)){
      document.getElementById('testAttempt3').innerHTML ='Приготовьтесь к основным попыткам';
      document.getElementById('innerResultAttempt3').innerHTML ='';
      document.getElementById('innerResult3').innerHTML ='';
    }
  } else if(testAllCount3>2){
    document.getElementById('testAttempt3').innerHTML = 'Идут основные попытки.';
  switch (colorBlockId) {
    case 'block1':
      if(document.getElementById('block1').style.backgroundColor == 'red'){
        trueClickCount3++;
        timeStop3=new Date().getTime();
        time3=(timeStop3-timeStart3)/1000;
        arrCount3=trueClickCount3;
        times3[arrCount3 -1]=time3;
        document.getElementById('innerResultAttempt3').innerHTML ='Верно выбран красный цвет, время:'+time3;
      } else {
        document.getElementById('innerResultAttempt3').innerHTML ='Блок-1 цвет неверный';
        falseClickCount3++;
      }
      break;
    case 'block2':
      if(document.getElementById('block2').style.backgroundColor == 'green'){
        trueClickCount3++;
        timeStop3=new Date().getTime();
        time3=(timeStop3-timeStart3)/1000;
        arrCount3=trueClickCount3;
        times3[arrCount3 -1]=time3;
        document.getElementById('innerResultAttempt3').innerHTML ='Верно выбран зеленый цвет, время:'+time3;
        } else {
          document.getElementById('innerResultAttempt3').innerHTML ='Блок-2 цвет неверный';
          falseClickCount3++;
      }
        break;
    case 'block3':
      if(document.getElementById('block3').style.backgroundColor == 'blue'){
        trueClickCount3++;
        timeStop3=new Date().getTime();
        time3=(timeStop3-timeStart3)/1000;
        arrCount3=trueClickCount3;
        times3[arrCount3 -1]=time3;
        document.getElementById('innerResultAttempt3').innerHTML ='Верно выбран синий цвет, время:'+time3;
      } else {
        document.getElementById('innerResultAttempt3').innerHTML ='Блок-3 цвет неверный';
        falseClickCount3++;
      }
      break;
    default:
  }
  document.getElementById('innerResult3').innerHTML = 'Засчитано:'+trueClickCount3+', ложных:'+falseClickCount3+', time:'+time3;
  if(trueClickCount3 == 3){
    for(let i=0; i<times3.length;i++){
      sum3+=times3[i];
    }
    average3 = (sum3/times3.length);
    document.getElementById('innerResultAttempt3').innerHTML ='';
    document.getElementById('innerResult3').innerHTML ='Итоговый результат- засчитано:'+trueClickCount3+" ,ложных:"+falseClickCount3+", среднее время:"+average3.toFixed(2);
    document.getElementById('startReaction3').disabled = true;
    clearInterval(interval3);
    document.getElementById('testAttempt3').innerHTML = '';
    document.getElementById('block1').style.backgroundColor = 'white';
    document.getElementById('block2').style.backgroundColor = 'white';
    document.getElementById('block3').style.backgroundColor = 'white';
    }
  }
}

//3 stop

//4
var trueClickCount4=0;
var falseClickCount4=0;
var falseTest4=0;
var trueTest4=0;
var startTime4;
var stopTime4;
var time4;
var times4=new Array(3);
var testAllCount4=0;
var arrCount4;
var sum4=0;
var average4=0;
var testAllCount4=0;
var falseTest4=0;
var trueTest4=0;
var interval4;
var audioTwo;
var status4;
var trueAnswer4=0;
var falseAnswer4=0;
function buttonFour() {
  document.getElementById('reaction4').style.display = 'block';
}
function startReactionFour(){
  interval4 = setInterval(function(){
    audioTwo=document.getElementById('audioTwo');
    setTimeout(function(){
      audioTwo.play();
      startTime4 = new Date();
      status4=1;
    },0);
  },3000);
}
function clickButtonFour(digitId40){
  var digitId4=digitId40;
  if(testAllCount4<3){
    document.getElementById('testAttempt4').innerHTML='Идут тестовые попытки';
    if(status4 != 1){
      document.getElementById('innerResultAttempt4').innerHTML='Ложное нажатие';
      falseTest4++;
      testAllCount4++;
    } else{
      trueTest4++;
      testAllCount4++;
      audioTwo.pause();
      audioTwo.load();
      status4=0;
      document.getElementById('innerResultAttempt4').innerHTML='Нажатие зачтено';
      stopTime4=new Date();
      time4=(stopTime4-startTime4-1000)/1000;
    }
    document.getElementById('innerResult4').innerHTML='Зачтено-'+trueTest4+',ложных-'+falseTest4+'time:'+time4;
    if((trueClickCount4==0)&&(testAllCount4==3)){
      document.getElementById('testAttempt4').innerHTML='Приготовьтесь к основным попыткам';
      document.getElementById('innerResultAttempt4').innerHTML='';
      document.getElementById('innerResult4').innerHTML='';
    }
  } else if(testAllCount4>2){
    document.getElementById('testAttempt4').innerHTML ='Идут основные попытки';
    if(status4 != 1){
      falseClickCount4++;
      document.getElementById('innerResultAttempt4').innerHTML='Ложное нажатие';
    }else {
      trueClickCount4++;
      audioTwo.pause();
      audioTwo.load();
      status4=0;
      document.getElementById('innerResultAttempt4').innerHTML='Нажатие зачтено';
      stopTime4=new Date();
      time4=(stopTime4-startTime4-1000)/1000;
      arrCount4=trueClickCount4;
      times4[arrCount4 -1]=time4;
      if(digitId4 == 'd42'){
        trueAnswer4++;
      } else if(digitId4 == 'd41'){
        falseAnswer4++;
      }
    }
    document.getElementById('innerResult4').innerHTML = 'Зачтено-'+trueClickCount4+',ложных-'+falseClickCount4+'time:'+time4;
    if(trueClickCount4 == 3){
      for(let i=0; i<times4.length;i++){
        sum4+=times4[i];
      }
      average4 = (sum4/times4.length);
      document.getElementById('innerResultAttempt4').innerHTML ='';
      document.getElementById('innerResult4').innerHTML ='Итоговый результат- засчитано:'+trueClickCount4+" ,ложных:"+falseClickCount4+", среднее время:"+average4.toFixed(2);
      document.getElementById('result44').innerHTML ='Верных ответов:'+trueAnswer4+', неверных:'+falseAnswer4;
      document.getElementById('startReaction4').disabled = true;
      audioTwo.pause();
      clearInterval(interval4);
      audioTwo.pause();
      document.getElementById('testAttempt4').innerHTML = '';

      }
  }
}
//4 stop

//5
var trueClickCount5=0;
var falseClickCount5=0;
var falseTest5=0;
var trueTest5=0;
var startTime5;
var stopTime5;
var time5;
var times5=new Array(3);
var testAllCount5=0;
var arrCount5;
var sum5=0;
var average5=0;
var testAllCount5=0;
var falseTest5=0;
var trueTest5=0;
var interval5;
var trueAnswer5=0;
var falseAnswer5=0;
var digitSum=0;
var allCount5=0;

function buttonFive() {
  document.getElementById('reaction5').style.display = 'block';
}
function startReactionFive(){
  interval5 = setInterval(function(){
    digit1=(Math.random()*50).toFixed(0);
    digit2=(Math.random()*50).toFixed(0);
    digitSum =digit1+digit2;
    startTime5=new Date();
    document.getElementById('addDigits').innerHTML = 'Сложите '+digit1+'+'+digit2;
  },4000);
}

function clickButtonFive(digitId5){
  if(testAllCount5<3){
    document.getElementById('testAttempt5').innerHTML = 'Идут тестовые попытки';
    if((digitSum/2 == 0)&&(digitId5 == 'd51')){
      trueTest5++;
      testAllCount5++;
      document.getElementById('innerResultAttempt5').innerHTML = 'Правильно';
    } else if((digitSum/2 != 0)&&(digitId5 == 'd52')){
      trueTest5++;
      testAllCount5++;
      document.getElementById('innerResultAttempt5').innerHTML = 'Правильно';
    } else {
      falseTest5++;
      testAllCount5++;
      document.getElementById('innerResultAttempt5').innerHTML = 'Неправильно';
    }
    document.getElementById('innerResult5').innerHTML ='Результаты: правильно'+trueTest5+', неправильно:'+falseTest5;
    if((testAllCount5==3)&&(trueClickCount5 ==0)){
      document.getElementById('testAttempt5').innerHTML = 'Приготовьтесь к основным попыткам';
      document.getElementById('innerResult5').innerHTML = '';
      document.getElementById('innerResultAttempt5').innerHTML = '';
    }
  } else if(testAllCount5>2){
    document.getElementById('testAttempt5').innerHTML = 'Идут основные попытки';
    if((digitSum/2 == 0)&&(digitId5 == 'd51')){
      trueClickCount5++;
      allCount5++;
      stopTime5=new Date();
      time5=(stopTime5-startTime5)/1000;
      arrCount5=allCount5;
      times5[arrCount5 -1]=time5;
      document.getElementById('innerResultAttempt5').innerHTML = 'Правильно';
    } else if((digitSum/2 != 0)&&(digitId5 == 'd52')){
      trueClickCount5++;
      allCount5++;
      stopTime5=new Date();
      time5=(stopTime5-startTime5)/1000;
      arrCount5=allCount5;
      times5[arrCount5 -1]=time5;
      document.getElementById('innerResultAttempt5').innerHTML = 'Правильно';
    } else {
      falseClickCount5++;
      allCount5++;
      stopTime5=new Date();
      time5=(stopTime5-startTime5)/1000;
      arrCount5=allCount5;
      times5[arrCount5 -1]=time5;
      document.getElementById('innerResultAttempt5').innerHTML = 'Неправильно';
    }
    document.getElementById('innerResult5').innerHTML ='Результаты: правильно'+trueClickCount5+', неправильно:'+falseClickCount5+', time:'+time5;
    if(allCount5 == 3){
      for(let i=0; i<times5.length;i++){
        sum5+=times5[i];
      }
      average5 = (sum5/times5.length);
      document.getElementById('innerResultAttempt5').innerHTML ='';
      document.getElementById('innerResult5').innerHTML ='Итоговый результат- засчитано:'+trueClickCount5+" ,ложных:"+falseClickCount5+", среднее время:"+average5.toFixed(2);
      document.getElementById('startReaction5').disabled = true;
      clearInterval(interval5);
      document.getElementById('addDigits').style.display ='none';
      document.getElementById('testAttempt4').innerHTML = '';
    }
  }
}

//5 stop

function hideAllButtons(){
  document.getElementById('buttonReaction1').style.display = 'none';
  document.getElementById('buttonReaction2').style.display = 'none';
  document.getElementById('buttonReaction3').style.display = 'none';
  document.getElementById('buttonReaction4').style.display = 'none';
  document.getElementById('buttonReaction5').style.display = 'none';
}

function showAllButtons(){
  document.getElementById('reaction1').style.display = 'none';
  document.getElementById('reaction2').style.display = 'none';
  document.getElementById('reaction3').style.display = 'none';
  document.getElementById('reaction4').style.display = 'none';
  document.getElementById('reaction5').style.display = 'none';

  document.getElementById('buttonReaction1').style.display = 'block';
  document.getElementById('buttonReaction2').style.display = 'block';
  document.getElementById('buttonReaction3').style.display = 'block';
  document.getElementById('buttonReaction4').style.display = 'block';
  document.getElementById('buttonReaction5').style.display = 'block';
}
