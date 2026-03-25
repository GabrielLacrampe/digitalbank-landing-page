<?php 
// Accedemos directamente a la sección que nos interesa mediante su llave
$mi_seccion = $web_data['section-stocks-commodities']; 
$datos = $mi_seccion['contenido']; 
?>
<div class="testing-box">
    <section id="stocks-commodities">
        <div id="display-content">
            <?php $inicial = $datos['section_config']['initial_state']; ?>
            <h1 class="dynamic-title"><?php echo $datos['dynamic_blocks'][$inicial]['title']; ?></h1>
            <p class="dynamic-text"><?php echo $datos['dynamic_blocks'][$inicial]['description']; ?></p>
        </div>
        <div>
            <?php renderButton($datos['static_blocks']['button'], false, 'hidden-mobile'); ?>
        </div>

        <?php renderImage($datos['dynamic_blocks'][$inicial], true); ?>

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
