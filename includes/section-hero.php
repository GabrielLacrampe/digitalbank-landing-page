<?php 
$mi_seccion = $web_data['section-hero']; 
$datos = $mi_seccion['contenido']; 
?>
<section id="main" class="main__section">        
    <?php renderImage($datos['static_blocks']['images']['image_a'], false, 'hero__background'); ?>
    
    <div class="dymension__20"></div>

    <div class="dymension__80">
        <?php renderTitle($datos['static_blocks']['group_a'], false, 'light__content hero__group hero__group--primary'); ?>
        <?php renderText($datos['static_blocks']['group_a'], false, 'light__content hero__group hero__group--primary'); ?>        
        <?php renderButton($datos['static_blocks']['group_a']['button'], false, 'light__content hero__group hero__group--primary'); ?>

        <?php renderTitle($datos['static_blocks']['group_b'], false, 'light__content hero__group hero__group--secondary'); ?>
        <?php renderText($datos['static_blocks']['group_b'], false, 'light__content hero__group hero__group--secondary'); ?>
        <?php renderButton($datos['static_blocks']['group_b']['button'], false, 'light__content hero__group hero__group--secondary'); ?>

        <?php renderImage($datos['static_blocks']['images']['image_b'], false, 'hero__image hero__image--left'); ?>
        <?php renderImage($datos['static_blocks']['images']['image_c'], false, 'hero__image hero__image--right'); ?>
    </div>

    <div class="dymension__20"></div>
</section>