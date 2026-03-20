<?php 
// Accedemos directamente a la sección que nos interesa mediante su llave
$mi_seccion = $web_data['section-cards']; 
$datos = $mi_seccion['contenido']; 
?>

<section id="cards">
    <!-- Define el estado inicial  -->
    <?php $inicial = $datos['section_config']['initial_state']; ?>

    <h1 class="dynamic-title"><?php echo $datos['dynamic_blocks'][$inicial]['title']; ?></h1>
    
    <!-- Sentencia para instanciar imagenes que pueden variar dependiendo de la opcion activa  -->
    <img class="dynamic-img placeholder-image" src="../assets/media/<?php echo $datos['dynamic_blocks'][$inicial]['image']; ?>" alt="<?php echo $datos['dynamic_blocks'][$inicial]['alt']; ?>">
        
    <p class="dynamic-description placeholder-text"><?php echo $datos['dynamic_blocks'][$inicial]['description']; ?></p>

    <div>
        <div class="dynamic-button button-style hidden-mobile"><a href="<?php echo $datos['dynamic_blocks'][$inicial]['button']['url']; ?>"><span><?php echo $datos['dynamic_blocks'][$inicial]['button']['button_text']; ?></span></a></div>  
    </div>
    
    <!-- Crea los botones extraidos desde el JSON-->
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