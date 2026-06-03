<?php 
$mi_seccion = $web_data['section-hero']; 
$datos = $mi_seccion['contenido']; 
?>
<section id="main" class="main__section">        
    <?php renderImage($datos['static_blocks']['images']['image_a'], 'hero__background'); ?>
    
    <div class="dimension__20"></div>

    <div class="dimension__40">
        <?php renderTitle($datos['static_blocks']['group_a'], 'light__content hero__group hero__group--primary'); ?>
        <?php renderText($datos['static_blocks']['group_a'], 'light__content hero__group hero__group--primary'); ?>        
        <div class="section__static__content">
            <?php renderButton($datos['static_blocks']['group_a']['button'], 'btn light__content hero__group hero__group--primary'); ?>
        </div>

        <?php renderTitle($datos['static_blocks']['group_b'], 'light__content hero__group hero__group--secondary'); ?>
        <?php renderText($datos['static_blocks']['group_b'], 'light__content hero__group hero__group--secondary'); ?>
        <div class="section__static__content">
            <?php renderButton($datos['static_blocks']['group_b']['button'], 'btn light__content hero__group hero__group--secondary'); ?>
        </div>
    </div>
    <div class="dimension__4020 u-flex-row-no-gap">
        <?php renderImage($datos['static_blocks']['images']['image_b'], 'hero__image hero__image--left'); ?>
        <?php renderImage($datos['static_blocks']['images']['image_c'], 'hero__image hero__image--right'); ?>
    </div>

</section>