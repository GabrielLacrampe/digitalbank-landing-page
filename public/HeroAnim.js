let isAtTop = true; // Estado: ¿Estamos en el punto inicial?
let isAnimating = false; // Bloqueo para evitar disparos múltiples
const imagenMain = document.querySelector('.hero__background');
const imagenLeft = document.querySelector('.hero__image--left');
const imagenRight = document.querySelector('.hero__image--right');
const groupA = document.querySelectorAll('.hero__group--primary');
const groupB = document.querySelectorAll('.hero__group--secondary');

const body = document.body;

// 1. Bloqueo inicial
body.classList.add('is-scroll-disabled');

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
    body.classList.remove('is-scroll-disabled');
    isAtTop = false;
    isAnimating = false;
  }, 1200); // Duración igual a la del CSS
}

function animarHaciaArriba() {
  isAnimating = true;
  body.classList.add('is-scroll-disabled'); // Volvemos a bloquear el scroll
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