<?php 
$mi_seccion = $web_data['section-stocks-commodities']; 
$datos = $mi_seccion['contenido']; 
$inicial = $datos['section_config']['initial_state']; 
?>
<section id="stocks-commodities">
    <?php renderTitle($datos['dynamic_blocks'][$inicial], true); ?>
    
    <?php renderText($datos['dynamic_blocks'][$inicial], true); ?>

    <?php renderButton($datos['static_blocks']['button'], false, 'is-hidden-mobile'); ?>

    <?php renderImage($datos['dynamic_blocks'][$inicial], true); ?>

    <?php renderControllers($datos['controllers']); ?>
    <script class="data-json" type="application/json">
        <?php echo json_encode($datos['dynamic_blocks']); ?>
    </script>
</section>