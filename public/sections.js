document.querySelectorAll('.tab-btn').forEach(boton => {
    boton.addEventListener('click', (e) => {
        // 1. ¿Qué opción quiere el usuario? (opcion_a u opcion_b)
        const target = e.target.getAttribute('data-target');
        
        // 2. Recuperamos los datos del bloque que guardamos en el script oculto
        const todasLasOpciones = JSON.parse(document.getElementById('data-seccion-8').textContent);
        const nuevosDatos = todasLasOpciones[target];

        // 3. ¡Cambiamos el contenido con una pequeña animación!
        const titulo = document.getElementById('dinamic-title');
        const texto = document.getElementById('dinamic-text');

        // Añadimos una clase de CSS para un efecto de "fade"
        titulo.style.opacity = 0;
        setTimeout(() => {
            titulo.textContent = nuevosDatos.titulo;
            texto.textContent = nuevosDatos.texto;
            titulo.style.opacity = 1;
        }, 300);
    });
});