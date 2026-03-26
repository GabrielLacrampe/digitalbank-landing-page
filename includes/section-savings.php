<?php 
// Accedemos directamente a la sección que nos interesa mediante su llave
$mi_seccion = $web_data['section-savings']; 
$datos = $mi_seccion['contenido']; 
?>
<div class="testing-box">
    <section id="savings">
        <?php $inicial = $datos['section_config']['initial_state']; ?>
        
        <?php renderTitle($datos['static_blocks'], false); ?>

        <?php renderImage($datos['dynamic_blocks'][$inicial], true); ?>
        
        <?php renderText($datos['static_blocks'], false); ?>
        
        <?php renderTitle($datos['dynamic_blocks'][$inicial], true); ?>

        <?php renderText($datos['dynamic_blocks'][$inicial], true); ?>

        <div>
            <?php renderButton($datos['static_blocks']['button'], false, 'hidden-mobile'); ?>
        </div>

        <div class="tabs">
            <?php foreach ($datos['controllers'] as $btn): ?>
                <button class="tab-btn" data-target="<?php echo $btn['target_data']; ?>">
                    <?php echo $btn['label']; ?>
                </button>
            <?php endforeach; ?>
        </div>   
        <script class="data-json" type="application/json">
            <?php echo json_encode($datos['dynamic_blocks']); ?>
        </script>
    </section>
</div>
