<?php 
    // Accedemos directamente a la sección que nos interesa mediante su llave
    $mi_seccion = $web_data['section-cards']; 
    $datos = $mi_seccion['contenido']; 
     $inicial = $datos['section_config']['initial_state'];
?>

<section id="cards" class="hero">        

    <?php renderImage($datos['dynamic_blocks'][$inicial], true, 'background__image'); ?>
    
    <div class="hero__logo"></div>
    
    <div class="hero__inner hero__inner--static">
        <?php renderTitle($datos['dynamic_blocks'][$inicial], true, 'hero__content'); ?>

        <?php renderText($datos['dynamic_blocks'][$inicial], true, 'hero__content'); ?>

        <?php renderButton($datos['dynamic_blocks'][$inicial]['button'], true, 'hero__content'); ?>
    </div>
    
    <div class="hero__logo">
        <?php renderControllers($datos['controllers']); ?>
        <script class="data-json" type="application/json">
            <?php echo json_encode($datos['dynamic_blocks']); ?>
        </script>
    </div>
</section>