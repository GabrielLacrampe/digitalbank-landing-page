<?php 
// Accedemos directamente a la sección que nos interesa mediante su llave
$mi_seccion = $web_data['section-stocks-commodities']; 
$datos = $mi_seccion['contenido']; 
?>
<div class="testing-box">
    <section id="stocks-commodities">
        <div id="display-content">
            <?php $inicial = $datos['section_config']['initial_state']; ?>
            <?php renderTitle($datos['dynamic_blocks'][$inicial], true); ?>
            <?php renderText($datos['dynamic_blocks'][$inicial], true); ?>
        </div>
        
        <div>
            <?php renderButton($datos['static_blocks']['button'], false, 'hidden-mobile'); ?>
        </div>

        <?php renderImage($datos['dynamic_blocks'][$inicial], true); ?>

        <?php renderControllers($datos['controllers']); ?>
        <script class="data-json" type="application/json">
            <?php echo json_encode($datos['dynamic_blocks']); ?>
        </script>
    </section>
</div>
