let isAtTop = true; // Estado: ¿Estamos en el punto inicial?
let isAnimating = false; // Bloqueo para evitar disparos múltiples
const imagen = document.querySelector('.fondo-animado');
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
  imagen.style.transform = `translateY(0px) scale(1)`; // Estado B

  setTimeout(() => {
    body.classList.remove('no-scroll');
    isAtTop = false;
    isAnimating = false;
  }, 1200); // Duración igual a la del CSS
}

function animarHaciaArriba() {
  isAnimating = true;
  body.classList.add('no-scroll'); // Volvemos a bloquear el scroll
  imagen.style.transform = `translateY(100px) scale(1.3)`; // Estado A

  setTimeout(() => {
    isAtTop = true;
    isAnimating = false;
  }, 1200);
}