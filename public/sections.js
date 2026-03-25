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
            const title = section.querySelector('.dynamic-title');
            const text = section.querySelector('.dynamic-text');
            const image = section.querySelector('.dynamic-image');
            const butons = section.querySelector('.dynamic-button');
            // 5. Animación y cambio
            if(title) title.style.opacity = 0;
            if(text) text.style.opacity = 0;
            if(image) image.style.opacity = 0;
            if(butons) butons.style.opacity = 0;

            setTimeout(() => {
                if(title) {
                    title.textContent = nuevosDatos.title;
                    title.style.opacity = 1;
                }
                if(text) {
                    text.textContent = nuevosDatos.description;
                    text.style.opacity = 1;
                }
                if(image && nuevosDatos.image) {
                    image.src = `../assets/media/${nuevosDatos.image}`;
                    image.style.opacity = 1;
                }
                // Esto puede contener errores. revisar
                if (butons && nuevosDatos.button) {
                    // 1. Buscamos el enlace y el span específicos dentro del div dinámico
                    const enlace = butons.querySelector('a');
                    const spanTexto = butons.querySelector('span');

                    if (enlace) {
                        enlace.href = nuevosDatos.button.url;
                    }
                    
                    if (spanTexto) {
                        // Usamos el nombre exacto que pusiste en el JSON
                        spanTexto.textContent = nuevosDatos.button.button_text;
                    }

                    butons.style.opacity = 1;
                }
            }, 300);
        });
    });
});