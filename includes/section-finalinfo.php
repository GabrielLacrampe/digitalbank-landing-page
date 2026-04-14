<?php 
$mi_seccion = $web_data['section-finalinfo']; 
$datos = $mi_seccion['contenido']; 
?>
<section id="finalinfo" class="main__section">
    <div class="dimension__10"></div>

    <div class="dimension__60">
        <?php renderTitle($datos['static_blocks'], 'dark__content'); ?>

        <?php renderButton($datos['static_blocks']['button'], 'btn light__content'); ?>

        <?php renderText($datos['static_blocks'], 'dark__content'); ?>
    </div>
    
    <div class="dimension__10"></div>
</section>