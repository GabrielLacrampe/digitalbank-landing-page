<?php 
    // Accedemos directamente a la sección que nos interesa mediante su llave
    $mi_seccion = $web_data['section-awards_references']; 
    $datos = $mi_seccion['contenido']; 
?>
<div class="testing-box">
    <section id="awards-references">
        <h1 class="static-title"><?php echo $datos['static_blocks']['title']; ?></h1>
        <div> 
            <p class="static-text"><?php echo $datos['static_blocks']['award_a']['description']; ?></p>
            <?php renderImage($datos['static_blocks']['award_a'], false); ?>
        </div>
        <div> 
            <p class="static-text"><?php echo $datos['static_blocks']['award_b']['description']; ?></p>
            <?php renderImage($datos['static_blocks']['award_b'], false); ?>
        </div>
        <div> 
            <p class="static-text"><?php echo $datos['static_blocks']['award_c']['description']; ?></p>
            <?php renderImage($datos['static_blocks']['award_c'], false); ?>
        </div>
        <div> 
            <p class="static-text"><?php echo $datos['static_blocks']['award_d']['description']; ?></p>
            <?php renderImage($datos['static_blocks']['award_d'], false); ?>
        </div>
        <div> 
            <p class="static-text"><?php echo $datos['static_blocks']['award_e']['description']; ?></p>
            <?php renderImage($datos['static_blocks']['award_e'], false); ?>
        </div>
        <div> 
            <p class="static-text"><?php echo $datos['static_blocks']['award_f']['description']; ?></p>
            <?php renderImage($datos['static_blocks']['award_f'], false); ?>
        </div>
    </section>
</div>