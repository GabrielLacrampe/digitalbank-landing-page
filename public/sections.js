document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.tab-btn').forEach(boton => {
        boton.addEventListener('click', (e) => {
            // 1. Buscamos la SECCIÓN contenedora más cercana (el ancestro <section>)
            const section = e.target.closest('section');
            
            // 2. ¿Qué opción quiere el usuario?
            const target = e.target.getAttribute('data-target');
            
            // 3. Recuperamos los datos del script que está DENTRO de esta sección
            const scriptData = section.querySelector('.data-json').textContent;
            const todasLasOpciones = JSON.parse(scriptData);
            const nuevosDatos = todasLasOpciones[target];

            // 4. Seleccionamos los elementos a cambiar DENTRO de esta sección únicamente
            const titulo = section.querySelector('.dinamic-title');
            const texto = section.querySelector('.dinamic-text');
            const imagen = section.querySelector('.dinamic-img'); // Por si quieres cambiar la foto

            // 5. Animación y cambio
            if(titulo) titulo.style.opacity = 0;
            if(texto) texto.style.opacity = 0;
            if(imagen) imagen.style.opacity = 0;

            setTimeout(() => {
                if(titulo) {
                    titulo.textContent = nuevosDatos.titulo;
                    titulo.style.opacity = 1;
                }
                if(texto) {
                    texto.textContent = nuevosDatos.texto;
                    texto.style.opacity = 1;
                }
                if(imagen && nuevosDatos.imagen) {
                    imagen.src = `../assets/media/${nuevosDatos.imagen}`;
                    imagen.style.opacity = 1;
                }
            }, 300);
        });
    });
});