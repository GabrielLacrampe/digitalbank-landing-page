<?php 
    // Accedemos directamente a la sección que nos interesa mediante su llave
    $mi_seccion = $web_data['section-cards']; 
    $datos = $mi_seccion['contenido']; 
     $inicial = $datos['section_config']['initial_state'];
?>

<section id="cards" class="main__section">        

    <?php renderImage($datos['dynamic_blocks'][$inicial], true, 'background__image'); ?>
    
    <div class="dymension__20"></div>
    
    <div class="dymension__80 section__static__content">
        <?php renderTitle($datos['dynamic_blocks'][$inicial], true, 'light__content'); ?>

        <?php renderText($datos['dynamic_blocks'][$inicial], true, 'light__content'); ?>

        <?php renderButton($datos['dynamic_blocks'][$inicial]['button'], true, 'light__content'); ?>
    </div>
    
    <div class="dymension__20">
        <?php renderControllers($datos['controllers']); ?>
        <script class="data-json" type="application/json">
            <?php echo json_encode($datos['dynamic_blocks']); ?>
        </script>
    </div>
</section>