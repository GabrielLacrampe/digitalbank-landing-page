<?php 
// Accedemos directamente a la sección que nos interesa mediante su llave
$mi_seccion = $web_data['section-stocks-commodities']; 
$datos = $mi_seccion['contenido']; 
?>

<section id="stocks-commodities">
    
    <div id="display-content">
        <?php $inicial = $datos['seccion_config']['estado_inicial']; ?>
        
        <h1 class="dinamic-title"><?php echo $datos['bloques_variables'][$inicial]['titulo']; ?></h1>
        <p class="dinamic-text"><?php echo $datos['bloques_variables'][$inicial]['texto']; ?></p>
    </div>

    <div>
        <div class="button-style hidden-mobile"><a href="<?php echo $datos['bloques_fijos']['boton_principal']['url']; ?>"><span><?php echo $datos['bloques_fijos']['boton_principal']['texto']; ?></span></a></div>  
    </div>
    <!-- TODO: falta agregar al json el texto alt de las imagenes-->
    <img class="dinamic-img placeholder-image" src="../assets/media/<?php echo $datos['bloques_variables'][$inicial]['imagen']; ?>" alt="<?php echo $datos['bloques_variables'][$inicial]['titulo']; ?>">

    <div class="tabs">
        <?php foreach ($datos['controles'] as $btn): ?>
            <button class="tab-btn" data-target="<?php echo $btn['target_data']; ?>">
                <?php echo $btn['label']; ?>
            </button>
        <?php endforeach; ?>
    </div>

    
    <script class="data-json" type="application/json">
        <?php echo json_encode($datos['bloques_variables']); ?>
    </script>
</section>