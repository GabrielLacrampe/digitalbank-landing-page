<?php 
    // Accedemos directamente a la sección que nos interesa mediante su llave
    $mi_seccion = $web_data['section-awards_references']; 
    $datos = $mi_seccion['contenido']; 
?>
<section id="awards-references" class="hero">
    <?php renderTitle($datos['static_blocks'], false); ?>
    
    <?php renderText($datos['static_blocks']['award_a'], false); ?>
    <?php renderImage($datos['static_blocks']['award_a'], false); ?>

    <?php renderText($datos['static_blocks']['award_b'], false); ?>
    <?php renderImage($datos['static_blocks']['award_b'], false); ?>

    <?php renderText($datos['static_blocks']['award_c'], false); ?>
    <?php renderImage($datos['static_blocks']['award_c'], false); ?>
    
    <?php renderText($datos['static_blocks']['award_d'], false); ?>
    <?php renderImage($datos['static_blocks']['award_d'], false); ?>
    
    <?php renderText($datos['static_blocks']['award_e'], false); ?>
    <?php renderImage($datos['static_blocks']['award_e'], false); ?>
</section>