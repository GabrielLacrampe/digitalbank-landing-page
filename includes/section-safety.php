<?php 
$mi_seccion = $web_data['section-safety']; 
$datos = $mi_seccion['contenido']; 
?>
<section id="safety" class="hero">
    <?php renderImage($datos['static_blocks'], false, 'background__image'); ?>
    <div class="hero__logo"></div>
    
    <div class="hero__inner hero__inner--static">
        <?php renderTitle($datos['static_blocks'], false, 'hero__content'); ?>

        <?php renderText($datos['static_blocks'], false, 'hero__content'); ?>
    
        <?php renderButton($datos['static_blocks']['button'], false, 'hero__content'); ?>
    </div>

    <div class="hero__logo"></div>
</section>