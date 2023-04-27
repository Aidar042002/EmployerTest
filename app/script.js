const block1 = document.getElementById('block1');
const block2 = document.getElementById('block2');
const block3 = document.getElementById('block3');
const button1 = document.getElementById('button1');
const button2 = document.getElementById('button2');
const button3 = document.getElementById('button3');

// Функция для изменения цвета блока
function changeColor(block) {
 block.style.backgroundColor = `rgb(${Math.random() * 255}, ${Math.random() * 255}, ${Math.random() * 255})`;
}

// Добавляем обработчики клика на кнопки
button1.addEventListener('click', function() {
 changeColor(block1);
});
button2.addEventListener('click', function() {
 changeColor(block2);
});
button3.addEventListener('click', function() {
 changeColor(block3);
});
