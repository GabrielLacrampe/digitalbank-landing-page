<?php 
$mi_seccion = $web_data['section-safety']; 
$datos = $mi_seccion['contenido']; 
?>
<section id="safety" class="hero">
    <?php renderImage($datos['static_blocks'], false, 'background__image'); ?>

    <?php renderTitle($datos['static_blocks'], false, 'hero__content'); ?>

    <?php renderText($datos['static_blocks'], false, 'hero__content'); ?>
    
    <?php renderButton($datos['static_blocks']['button'], false, 'hero__content'); ?>
</section>