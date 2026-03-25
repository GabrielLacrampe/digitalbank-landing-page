<?php 
    // Accedemos directamente a la sección que nos interesa mediante su llave
    $mi_seccion = $web_data['section-cards']; 
    $datos = $mi_seccion['contenido']; 
?>
<div class="testing-box">
    <section id="cards">
        <?php $inicial = $datos['section_config']['initial_state']; ?>
        
        <h1 class="dynamic-title"><?php echo $datos['dynamic_blocks'][$inicial]['title']; ?></h1>

        <?php renderImage($datos['dynamic_blocks'][$inicial], true); ?>

        <?php renderText($datos['dynamic_blocks'][$inicial], true); ?>

        <div>
            <?php renderButton($datos['dynamic_blocks'][$inicial]['button'], true, 'hidden-desktop'); ?>
        </div>

        <?php renderControllers($datos['controllers']); ?>
        <script class="data-json" type="application/json">
            <?php echo json_encode($datos['dynamic_blocks']); ?>
        </script>
    </section>
</div>
