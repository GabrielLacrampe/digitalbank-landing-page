<?php 
    // Accedemos directamente a la sección que nos interesa mediante su llave
    $mi_seccion = $web_data['section-cards']; 
    $datos = $mi_seccion['contenido']; 
?>
<div class="testing-box">
    <section id="cards">
        <!-- Define el estado inicial  -->
        <?php $inicial = $datos['section_config']['initial_state']; ?>
        
        <h1 class="dynamic-title"><?php echo $datos['dynamic_blocks'][$inicial]['title']; ?></h1>

        <?php renderImage($datos['dynamic_blocks'][$inicial], true); ?>

        <p class="dynamic-description placeholder-text"><?php echo $datos['dynamic_blocks'][$inicial]['description']; ?></p>
        
        <div>
            <?php renderButton($datos['dynamic_blocks'][$inicial]['button'], true, 'hidden-desktop'); ?>
        </div>

        <!-- Crea los botones extraidos desde el JSON (esto es otro componente)-->
        <div class="tabs">
            <?php foreach ($datos['controllers'] as $btn): ?>
                <button class="tab-btn" data-target="<?php echo $btn['target_data']; ?>">
                    <?php echo $btn['label']; ?>
                </button>
            <?php endforeach; ?>
        </div>
        <!-- Necesario para que funcionen los botones-->
        <script class="data-json" type="application/json">
            <?php echo json_encode($datos['dynamic_blocks']); ?>
        </script>
    </section>
</div>
