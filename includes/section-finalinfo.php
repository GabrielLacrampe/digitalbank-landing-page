<?php 
$mi_seccion = $web_data['section-finalinfo']; 
$datos = $mi_seccion['contenido']; 
?>
<section id="finalinfo" class="hero">
    <?php renderTitle($datos['static_blocks'], false); ?>

    <?php renderButton($datos['static_blocks']['button'], false); ?>

    <?php renderText($datos['static_blocks'], false); ?>
</section>