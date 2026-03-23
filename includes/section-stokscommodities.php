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
            <div class="static-button button-style hidden-mobile"><a href="<?php echo $datos['static_blocks']['button']['url']; ?>"><span><?php echo $datos['static_blocks']['button']['button_text']; ?></span></a></div>  
        </div>
        <!-- TODO: falta agregar al json el texto alt de las imagenes-->
        <img class="dynamic-img placeholder-image" src="../assets/media/<?php echo $datos['dynamic_blocks'][$inicial]['image']; ?>" alt="<?php echo $datos['dynamic_blocks'][$inicial]['alt']; ?>">
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
