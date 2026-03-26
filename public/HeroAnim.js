let isAtTop = true; // Estado: ¿Estamos en el punto inicial?
let isAnimating = false; // Bloqueo para evitar disparos múltiples
const imagenMain = document.querySelector('.fondo-animado');
const imagenLeft = document.querySelector('.hero-image-left');
const imagenRight = document.querySelector('.hero-image-right');
const groupA = document.querySelectorAll('.group-a');
const groupB = document.querySelectorAll('.group-b');

const body = document.body;

// 1. Bloqueo inicial
body.classList.add('no-scroll');

window.addEventListener('wheel', function (event) {
  if (isAnimating) return; // Si está moviéndose, no hacer nada

  const scrollingDown = event.deltaY > 0;
  const scrollingUp = event.deltaY < 0;

  // A -> B: Bajar desde el tope
  if (isAtTop && scrollingDown) {
    animarHaciaAbajo();
  }
  // B -> A: Subir cuando ya estamos arriba pero el scroll está libre
  else if (!isAtTop && scrollingUp && window.pageYOffset <= 0) {
    animarHaciaArriba();
  }
}, { passive: false });

function animarHaciaAbajo() {
  isAnimating = true;
  imagenMain.style.transform = `translateY(0px) scale(1)`; // Estado B
  imagenLeft.style.transform = `translateX(0px) scale(1)`;
  imagenLeft.style.opacity = '1';
  imagenRight.style.transform = `translateX(0px) scale(1)`;
  imagenRight.style.opacity = '1';

  groupA.forEach(el => {
    el.style.transform = `translateY(0px)`;
    el.style.opacity = '0';
  });
  groupB.forEach(el => {
    el.style.transform = `translateY(0px)`;
    el.style.opacity = '1';
  });

  setTimeout(() => {
    body.classList.remove('no-scroll');
    isAtTop = false;
    isAnimating = false;
  }, 1200); // Duración igual a la del CSS
}

function animarHaciaArriba() {
  isAnimating = true;
  body.classList.add('no-scroll'); // Volvemos a bloquear el scroll
  imagenMain.style.transform = `translateY(100px) scale(1.3)`; // Estado A
  imagenLeft.style.transform = `translateX(-500px) scale(0.7)`;
  imagenLeft.style.opacity = '0';
  imagenRight.style.transform = `translateX(500px) scale(0.7)`;
  imagenRight.style.opacity = '0';

  groupA.forEach(el => {
    el.style.transform = `translateY(0px)`;
    el.style.opacity = '1';
  });
  groupB.forEach(el => {
    el.style.transform = `translateY(50px)`;
    el.style.opacity = '0';
  });

  setTimeout(() => {
    isAtTop = true;
    isAnimating = false;
  }, 1200);
}