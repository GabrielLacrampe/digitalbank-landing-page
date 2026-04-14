<?php 
$mi_seccion = $web_data['section-stocks-commodities']; 
$datos = $mi_seccion['contenido']; 
$inicial = $datos['section_config']['initial_state']; 
?>
<section id="stocks-commodities" class="main__section">
    <?php renderImage($datos['dynamic_blocks'][$inicial], true, 'background__image'); ?>
    <div class="dymension__10"></div>

    <div class="dymension__60 section__static__content">
        <?php renderTitle($datos['dynamic_blocks'][$inicial], true, 'light__content'); ?>
        
        <?php renderText($datos['dynamic_blocks'][$inicial], true, 'light__content'); ?>

        <?php renderButton($datos['static_blocks']['button'], false, 'light__content'); ?>
    </div>

    <div class="dymension__10">
        <?php renderControllers($datos['controllers']); ?>
        <script class="data-json" type="application/json">
            <?php echo json_encode($datos['dynamic_blocks']); ?>
        </script>
    </div>
</section>