<?php $datos = json_decode($seccion['contenido_json'], true); ?>

<section id="intercambiable">
    <div class="tabs">
        <?php foreach ($datos['controles'] as $btn): ?>
            <button class="tab-btn" data-target="<?php echo $btn['target_data']; ?>">
                <?php echo $btn['label']; ?>
            </button>
        <?php endforeach; ?>
    </div>

    <div id="display-content">
        <?php $inicial = $datos['seccion_config']['estado_inicial']; ?>
        
        <h2 id="dinamic-title"><?php echo $datos['bloques_variables'][$inicial]['titulo']; ?></h2>
        <p id="dinamic-text"><?php echo $datos['bloques_variables'][$inicial]['texto']; ?></p>
    </div>

    <script id="data-seccion-8" type="application/json">
        <?php echo json_encode($datos['bloques_variables']); ?>
    </script>
</section>