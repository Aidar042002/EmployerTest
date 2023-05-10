function showReaction(reactionId){
  switch (reactionId) {
    case 'reaction1':
      hideButtons();
      document.getElementById('reaction1').style.display = 'block';
      break;
    case 'reaction2':
      hideButtons();
      document.getElementById('reaction2').style.display = 'block';
      break;
    default:

  }
}

function hideButtons(){
  document.getElementById('button1').style.display = 'none';
  document.getElementById('button2').style.display = 'none';
}

function back(){
  document.getElementById('button1').style.display = 'block';
  document.getElementById('button2').style.display = 'block';

  document.getElementById('reaction1').style.display = 'none';
  document.getElementById('reaction2').style.display = 'none';
}
