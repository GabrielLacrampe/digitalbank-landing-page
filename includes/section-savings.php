<?php 
// Accedemos directamente a la sección que nos interesa mediante su llave
$mi_seccion = $web_data['section-savings']; 
$datos = $mi_seccion['contenido']; 
?>
<div class="testing-box">
    <section id="savings">
        <?php $inicial = $datos['section_config']['initial_state']; ?>
        
        <h1 class="static-title"><?php echo $datos['static_blocks']['title']; ?></h1>
        
        <?php renderImage($datos['dynamic_blocks'][$inicial], true); ?>
        
        <p class="static-text"><?php echo $datos['static_blocks']['description']; ?></p>
        
        <p class="dynamic-text"><?php echo $datos['dynamic_blocks'][$inicial]['description']; ?></p>
        
        <div>
            <?php renderButton($datos['static_blocks']['button'], false, 'hidden-mobile'); ?>
        </div>

        <?php renderControllers($datos['controllers']); ?>      
        <script class="data-json" type="application/json">
            <?php echo json_encode($datos['dynamic_blocks']); ?>
        </script>
    </section>
</div>
