<?php 
$mi_seccion = $web_data['section-finalinfo']; 
$datos = $mi_seccion['contenido']; 
?>
<section id="finalinfo">
    <?php renderTitle($datos['static_blocks'], false); ?>

    <?php renderImage($datos['static_blocks'], false); ?>

    <?php renderText($datos['static_blocks'], false); ?>

    <?php renderButton($datos['static_blocks']['button'], false); ?>
</section>