<?php 
$mi_seccion = $web_data['section-hero']; 
$datos = $mi_seccion['contenido']; 
?>
<div class="hero-section">
    <?php renderImage($datos['static_blocks']['images']['image_a'], false, 'fondo-animado'); ?>
    
    <div class="hero-30"></div>
    

    <div class="hero-content-interior">
        <?php renderTitle($datos['static_blocks']['group_a'], false, 'hero-content group-a'); ?>
        <?php renderText($datos['static_blocks']['group_a'], false, 'hero-content group-a'); ?>        
        <?php renderButton($datos['static_blocks']['group_a']['button'], false, 'hero-content group-a'); ?>

        <?php renderTitle($datos['static_blocks']['group_b'], false, 'hero-content group-b'); ?>
        <?php renderText($datos['static_blocks']['group_b'], false, 'hero-content group-b'); ?>
        <?php renderButton($datos['static_blocks']['group_b']['button'], false, 'hero-content group-b'); ?>

        <?php renderImage($datos['static_blocks']['images']['image_b'], false, 'hero-image-left'); ?>
        <?php renderImage($datos['static_blocks']['images']['image_c'], false, 'hero-image-right'); ?>
    </div>

       
    <div class="hero-30"></div>     
</div>