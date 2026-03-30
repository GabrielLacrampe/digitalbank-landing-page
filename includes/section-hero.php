<?php 
$mi_seccion = $web_data['section-hero']; 
$datos = $mi_seccion['contenido']; 
?>
<div class="hero">
    <?php renderImage($datos['static_blocks']['images']['image_a'], false, 'hero__background'); ?>
    
    <div class="hero__logo"></div>
    

    <div class="hero__inner">
        <?php renderTitle($datos['static_blocks']['group_a'], false, 'hero__content hero__group hero__group--primary'); ?>
        <?php renderText($datos['static_blocks']['group_a'], false, 'hero__content hero__group hero__group--primary'); ?>        
        <?php renderButton($datos['static_blocks']['group_a']['button'], false, 'hero__content hero__group hero__group--primary'); ?>

        <?php renderTitle($datos['static_blocks']['group_b'], false, 'hero__content hero__group hero__group--secondary'); ?>
        <?php renderText($datos['static_blocks']['group_b'], false, 'hero__content hero__group hero__group--secondary'); ?>
        <?php renderButton($datos['static_blocks']['group_b']['button'], false, 'hero__content hero__group hero__group--secondary'); ?>

        <?php renderImage($datos['static_blocks']['images']['image_b'], false, 'hero__image hero__image--left'); ?>
        <?php renderImage($datos['static_blocks']['images']['image_c'], false, 'hero__image hero__image--right'); ?>
    </div>

       
    <div class="hero__logo"></div>     
</div>