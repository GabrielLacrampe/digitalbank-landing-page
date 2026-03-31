<?php 
$mi_seccion = $web_data['section-stocks-commodities']; 
$datos = $mi_seccion['contenido']; 
$inicial = $datos['section_config']['initial_state']; 
?>
<section id="stocks-commodities" class="hero">
    <?php renderImage($datos['dynamic_blocks'][$inicial], true, 'background__image'); ?>
    <div class="hero__logo"></div>

    <div class="hero__inner hero__inner--static">
        <?php renderTitle($datos['dynamic_blocks'][$inicial], true, 'hero__content'); ?>
        
        <?php renderText($datos['dynamic_blocks'][$inicial], true, 'hero__content'); ?>

        <?php renderButton($datos['static_blocks']['button'], false, 'hero__content'); ?>
    </div>

    <div class="hero__logo">
        <?php renderControllers($datos['controllers']); ?>
        <script class="data-json" type="application/json">
            <?php echo json_encode($datos['dynamic_blocks']); ?>
        </script>
    </div>
</section>