<?php 
$mi_seccion = $web_data['section-savings']; 
$datos = $mi_seccion['contenido']; 
$inicial = $datos['section_config']['initial_state'];
?>
<section id="savings">        
    <?php renderTitle($datos['static_blocks'], false); ?>

    <?php renderImage($datos['dynamic_blocks'][$inicial], true); ?>
    
    <?php renderText($datos['static_blocks'], false); ?>
    
    <?php renderTitle($datos['dynamic_blocks'][$inicial], true); ?>

    <?php renderText($datos['dynamic_blocks'][$inicial], true); ?>

    <?php renderButton($datos['static_blocks']['button'], false, 'is-hidden-mobile'); ?>

    <?php renderControllers($datos['controllers']); ?>
    <script class="data-json" type="application/json">
        <?php echo json_encode($datos['dynamic_blocks']); ?>
    </script>
</section>