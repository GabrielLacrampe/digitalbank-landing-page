<div class="horizontal-container">
            <div class="">
                <img class="main-icon" src="../assets/media/<?php echo $contenido[4]['nombre_archivo']; ?>" alt="<?php echo $contenido[4]['titulo']; ?>">
            </div>

            <!-- Aquí tienen dos div separados que se muestran
                 uno u otro dependiendo del tamaño de la pantalla-->

            <!-- Pantalla amplia, menu con opciones:
                Personal, Business, Kids & Tens, Sobre Nosotros, 
                Iniciar sesión y Registrarse-->
            <div class="horizontal-container width100">
                <!-- Personal, Business, Kids & Tens, Sobre Nosotros -->
                <span class="horizontal-container">
                    <div class="button-style hidden-mobile"><a href=""><span>Personal</span></a></div>
                    <div class="button-style hidden-mobile"><a href=""><span>Business</span></a></div>
                    <div class="button-style hidden-mobile"><a href=""><span>Kids & Tens</span></a></div>
                    <div class="button-style hidden-mobile"><a href=""><span>Sobre Nosotros</span></a></div>
                </span>

                <!-- Iniciar sesión y Registrarse -->
                <span class="horizontal-container justify-right">
                    <div class="button-style hidden-mobile"><a href=""><span>Iniciar sesión</span></a></div>
                    <div class="button-style hidden-mobile"><a href=""><span>Registrarse</span></a></div>
                </span>
            </div>

            <div>
                <i class="bi bi-menu-button-wide solo-desktop"></i>
            </div>
        </div>