<?php 
// Accedemos directamente a la sección que nos interesa mediante su llave
$mi_seccion = $web_data['section-savings']; 
$datos = $mi_seccion['contenido']; 
?>

<section id="savings">
    <!-- Define el estado inicial  -->
    <?php $inicial = $datos['seccion_config']['estado_inicial']; ?>

    <h1 class="static-title"><?php echo $datos['bloques_fijos']['title']; ?></h1>
    
    <!-- Sentencia para instanciar imagenes que pueden variar dependiendo de la opcion activa  -->
    <img class="dinamic-img placeholder-image" src="../assets/media/<?php echo $datos['bloques_variables'][$inicial]['imagen']; ?>" alt="<?php echo $datos['bloques_variables'][$inicial]['titulo']; ?>">
    
    <p class="static-text"><?php echo $datos['bloques_fijos']['description']; ?></p>
    
    <p class="dinamic-text placeholder-text"><?php echo $datos['bloques_variables'][$inicial]['texto']; ?></p>

    <div>
        <div class="button-style hidden-mobile"><a href="<?php echo $datos['bloques_fijos']['boton_exploreSavings']['url']; ?>"><span><?php echo $datos['bloques_fijos']['boton_exploreSavings']['texto']; ?></span></a></div>  
    </div>
    
    <!-- Crea los botones extraidos desde el JSON-->
    <div class="tabs">
        <?php foreach ($datos['controles'] as $btn): ?>
            <button class="tab-btn" data-target="<?php echo $btn['target_data']; ?>">
                <?php echo $btn['label']; ?>
            </button>
        <?php endforeach; ?>
    </div>

     <!-- Necesario para que funcionen los botones-->
    <script class="data-json" type="application/json">
        <?php echo json_encode($datos['bloques_variables']); ?>
    </script>
</section>