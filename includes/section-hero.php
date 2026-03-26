<?php 
// Accedemos directamente a la sección que nos interesa mediante su llave
$mi_seccion = $web_data['section-hero']; 
$datos = $mi_seccion['contenido']; 
?>
<div class="contenido-hero testing-box">
    <?php renderImage($datos['static_blocks']['images']['image_a'], false, 'fondo-animado'); ?>
    <div class="testing-box hero-30"></div>
        <div class="testing-box hero-content-interior">
            <?php renderTitle($datos['static_blocks']['group_a'], false, 'hero-content-title'); ?>

            <?php renderText($datos['static_blocks']['group_a'], false, 'hero-content-paragraph'); ?>
            <?php renderButton($datos['static_blocks']['group_a']['button'], false, 'hero-content-button'); ?>
        </div>
    <div class="testing-box hero-30"></div>     
</div>
