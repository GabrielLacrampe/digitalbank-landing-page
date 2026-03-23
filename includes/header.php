<?php 
// Accedemos directamente a la sección que nos interesa mediante su llave
$mi_seccion = $web_data['header']; 
$datos = $mi_seccion['contenido']; 
?>

<div class="horizontal-container">
    <div class="">
        <img class="static-image placeholder-image" src="../assets/media/<?php echo $datos['static_blocks']['image']; ?>" alt="<?php echo $datos['static_blocks']['alt']; ?>">
    </div>

    <!-- Aquí tienen dos div separados que se muestran
            uno u otro dependiendo del tamaño de la pantalla-->

    <!-- Pantalla amplia, menu con opciones:
        Personal, Business, Kids & Tens, Sobre Nosotros, 
        Iniciar sesión y Registrarse-->
    <div class="horizontal-container width100">
        <!-- Personal, Business, Kids & Tens, Sobre Nosotros -->
        <span class="horizontal-container">
            <div class="button-style hidden-mobile"><a href="<?php echo $datos['static_blocks']['button_personal']['url']; ?>"><span><?php echo $datos['static_blocks']['button_personal']['button_text']; ?></span></a></div>
            <div class="button-style hidden-mobile"><a href="<?php echo $datos['static_blocks']['button_business']['url']; ?>"><span><?php echo $datos['static_blocks']['button_business']['button_text']; ?></span></a></div>
            <div class="button-style hidden-mobile"><a href="<?php echo $datos['static_blocks']['button_kidstens']['url']; ?>"><span><?php echo $datos['static_blocks']['button_kidstens']['button_text']; ?></span></a></div>
            <div class="button-style hidden-mobile"><a href="<?php echo $datos['static_blocks']['button_aboutus']['url']; ?>"><span><?php echo $datos['static_blocks']['button_aboutus']['button_text']; ?></span></a></div>
        </span>

        <!-- Iniciar sesión y Registrarse -->
        <span class="horizontal-container justify-right">
            <div class="button-style hidden-mobile"><a href="<?php echo $datos['static_blocks']['button_login']['url']; ?>"><span><?php echo $datos['static_blocks']['button_login']['button_text']; ?></span></a></div>
            <div class="button-style hidden-mobile"><a href="<?php echo $datos['static_blocks']['button_register']['url']; ?>"><span><?php echo $datos['static_blocks']['button_register']['button_text']; ?></span></a></div>
        </span>
    </div>

    <div>
        <i class="bi bi-menu-button-wide solo-desktop"></i>
    </div>
</div>