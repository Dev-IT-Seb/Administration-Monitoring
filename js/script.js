// ---------------------------------------------------------------------- //
// BACKGROUND MATRIX
let canvas = document.querySelector('canvas'),
ctx = canvas.getContext('2d');

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

let letters = 'ABCDEFGHIJKLMNOPQRSTUVXYZABCDEFGHIJKLMNOPQRSTUVXYZ';
letters = letters.split('');

let fontSize = 10, 
    columns = canvas.width / fontSize;

let drops = [];
for (let i = 0; i < columns; i++) {
  drops[i] = 1;
}

function draw() {
  ctx.fillStyle = 'hsla(0, 0.00%, 0.00%, 0.10)';
  ctx.fillRect(0, 0, canvas.width, canvas.height);
  for (let i = 0; i < drops.length; i++) {
    let text = letters[Math.floor(Math.random() * letters.length)];
    ctx.fillStyle = '#0f0';
    ctx.fillText(text, i * fontSize, drops[i] * fontSize);
    drops[i]++;
    if (drops[i] * fontSize > canvas.height && Math.random() > .95) {
      drops[i] = 0;
    }
  }
}

setInterval(draw, 45);
// ---------------------------------------------------------------------- //