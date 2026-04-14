<?php 
$mi_seccion = $web_data['section-hero']; 
$datos = $mi_seccion['contenido']; 
?>
<section id="main" class="main__section">        
    <?php renderImage($datos['static_blocks']['images']['image_a'], 'hero__background'); ?>
    
    <div class="dymension__10"></div>

    <div class="dymension__50">
        <?php renderTitle($datos['static_blocks']['group_a'], 'light__content hero__group hero__group--primary'); ?>
        <?php renderText($datos['static_blocks']['group_a'], 'light__content hero__group hero__group--primary'); ?>        
        <?php renderButton($datos['static_blocks']['group_a']['button'], 'btn light__content hero__group hero__group--primary'); ?>

        <?php renderTitle($datos['static_blocks']['group_b'], 'light__content hero__group hero__group--secondary'); ?>
        <?php renderText($datos['static_blocks']['group_b'], 'light__content hero__group hero__group--secondary'); ?>
        <?php renderButton($datos['static_blocks']['group_b']['button'], 'btn light__content hero__group hero__group--secondary'); ?>
    </div>
    <div class="dymension__4020 u-flex-row-no-gap">
        <?php renderImage($datos['static_blocks']['images']['image_b'], 'hero__image hero__image--left'); ?>
        <?php renderImage($datos['static_blocks']['images']['image_c'], 'hero__image hero__image--right'); ?>
    </div>

</section>