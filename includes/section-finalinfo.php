<?php 
$mi_seccion = $web_data['section-finalinfo']; 
$datos = $mi_seccion['contenido']; 
?>
<section id="finalinfo" class="hero">
        <div class="hero__logo"></div>

    <div class="hero__inner">
        <?php renderTitle($datos['static_blocks'], false, 'hero__content__default'); ?>

        <?php renderButton($datos['static_blocks']['button'], false, 'hero__content'); ?>

        <?php renderText($datos['static_blocks'], false, 'hero__content__default'); ?>
    </div>
    
    <div class="hero__logo"></div>
</section>