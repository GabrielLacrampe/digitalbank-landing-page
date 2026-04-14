<?php 
    // Accedemos directamente a la sección que nos interesa mediante su llave
    $mi_seccion = $web_data['section-awards_references']; 
    $datos = $mi_seccion['contenido']; 
?>
<section id="awards-references" class="main__section">
    <?php renderTitle($datos['static_blocks']); ?>
    
    <?php renderText($datos['static_blocks']['award_a']); ?>
    <?php renderImage($datos['static_blocks']['award_a']); ?>

    <?php renderText($datos['static_blocks']['award_b']); ?>
    <?php renderImage($datos['static_blocks']['award_b']); ?>

    <?php renderText($datos['static_blocks']['award_c']); ?>
    <?php renderImage($datos['static_blocks']['award_c']); ?>
    
    <?php renderText($datos['static_blocks']['award_d']); ?>
    <?php renderImage($datos['static_blocks']['award_d']); ?>
    
    <?php renderText($datos['static_blocks']['award_e']); ?>
    <?php renderImage($datos['static_blocks']['award_e']); ?>
</section>