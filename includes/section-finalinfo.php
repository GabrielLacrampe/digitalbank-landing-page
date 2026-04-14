<?php 
$mi_seccion = $web_data['section-finalinfo']; 
$datos = $mi_seccion['contenido']; 
?>
<section id="finalinfo" class="main__section">
    <div class="dymension__10"></div>

    <div class="dymension__60">
        <?php renderTitle($datos['static_blocks'], 'dark__content'); ?>

        <?php renderButton($datos['static_blocks']['button'], 'btn light__content'); ?>

        <?php renderText($datos['static_blocks'], 'dark__content'); ?>
    </div>
    
    <div class="dymension__10"></div>
</section>