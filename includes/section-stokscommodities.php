<?php 
$mi_seccion = $web_data['section-stocks-commodities']; 
$datos = $mi_seccion['contenido']; 
$inicial = $datos['section_config']['initial_state']; 
?>
<section id="stocks-commodities" class="main__section">
    <?php renderImage($datos['dynamic_blocks'][$inicial], 'dynamic-image  background__image'); ?>
    <div class="dimension__10"></div>

    <div class="dimension__60 section__static__content">
        <?php renderTitle($datos['dynamic_blocks'][$inicial], 'dynamic-title light__content'); ?>
        
        <?php renderText($datos['dynamic_blocks'][$inicial], 'dynamic-text light__content'); ?>

        <?php renderButton($datos['static_blocks']['button'], 'btn light__content'); ?>
    </div>

    <div class="dimension__10">
        <?php renderControllers($datos['controllers']); ?>
        <script class="data-json" type="application/json">
            <?php echo json_encode($datos['dynamic_blocks']); ?>
        </script>
    </div>
</section>