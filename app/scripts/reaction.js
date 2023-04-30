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
function buttonTwo(){
  document.getElementById('reaction2').style.display ='block';
}

function buttonThree(){

}

function buttonFour() {

}

function buttonFive() {

}

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

  document.getElementById('buttonReaction1').style.display = 'block';
  document.getElementById('buttonReaction2').style.display = 'block';
  document.getElementById('buttonReaction3').style.display = 'block';
  document.getElementById('buttonReaction4').style.display = 'block';
  document.getElementById('buttonReaction5').style.display = 'block';
}

// if(color== 'white'){
//   document.getElementById('innerResultAttempt1').innerHTML = 'Ложное нажатие';
//   falseClickCount1++;
// } else{
//   trueClickCount1++;
//   if(trueClickCount1>0){
//   document.getElementById('innerResultAttempt1').innerHTML = 'Попытка засчитана';
//   stopTime1 = new Date().getTime();
//   time1 = (stopTime1-startTime1)/1000;
//   } else{
//
//     }
//
// }
// if(trueClickCount1>0){
// document.getElementById('innerResult1').innerHTML = 'Результаты: засчитано нажатий:'+trueClickCount1 +'. Ложных нажатий:'+falseClickCount1+".Время: "+ time1;
// }
// if(trueClickCount1 == 3) {
//   clearInterval(interval1);
//
// }
