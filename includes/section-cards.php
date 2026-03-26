<?php 
    // Accedemos directamente a la sección que nos interesa mediante su llave
    $mi_seccion = $web_data['section-cards']; 
    $datos = $mi_seccion['contenido']; 
     $inicial = $datos['section_config']['initial_state'];
?>
<section id="cards">        
    <?php renderTitle($datos['dynamic_blocks'][$inicial], true); ?>

    <?php renderImage($datos['dynamic_blocks'][$inicial], true); ?>

    <?php renderText($datos['dynamic_blocks'][$inicial], true); ?>

    <?php renderButton($datos['dynamic_blocks'][$inicial]['button'], true, 'hidden-desktop'); ?>

    <?php renderControllers($datos['controllers']); ?>
    <script class="data-json" type="application/json">
        <?php echo json_encode($datos['dynamic_blocks']); ?>
    </script>
</section>