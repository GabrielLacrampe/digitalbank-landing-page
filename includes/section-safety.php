<?php 
$mi_seccion = $web_data['section-safety']; 
$datos = $mi_seccion['contenido']; 
?>
<section id="safety">
    <?php renderTitle($datos['static_blocks'], false); ?>

    <?php renderImage($datos['static_blocks'], false); ?>

    <?php renderText($datos['static_blocks'], false); ?>
    
    <?php renderButton($datos['static_blocks']['button'], false); ?>
</section>