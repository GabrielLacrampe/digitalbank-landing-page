<?php 
$mi_seccion = $web_data['section-safety']; 
$datos = $mi_seccion['contenido']; 
?>
<section id="safety" class="main__section">
    <?php renderImage($datos['static_blocks'], 'background__image'); ?>
    <div class="dimension__10"></div>
    
    <div class="dimension__60 section__static__content">
        <?php renderTitle($datos['static_blocks'], 'light__content'); ?>

        <?php renderText($datos['static_blocks'], 'light__content'); ?>
    
        <?php renderButton($datos['static_blocks']['button'], 'btn light__content'); ?>
    </div>

    <div class="dimension__10"></div>
</section>