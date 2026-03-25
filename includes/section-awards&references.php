<?php 
    // Accedemos directamente a la sección que nos interesa mediante su llave
    $mi_seccion = $web_data['section-awards_references']; 
    $datos = $mi_seccion['contenido']; 
?>
<div class="testing-box">
    <section id="awards-references">
        <h1 class="static-title"><?php echo $datos['static_blocks']['title']; ?></h1>
        <div> 
            <?php renderText($datos['static_blocks']['award_a'], false); ?>
            <?php renderImage($datos['static_blocks']['award_a'], false); ?>
        </div>
        <div> 
            <?php renderText($datos['static_blocks']['award_b'], false); ?>
            <?php renderImage($datos['static_blocks']['award_b'], false); ?>
        </div>
        <div> 
            <?php renderText($datos['static_blocks']['award_c'], false); ?>
            <?php renderImage($datos['static_blocks']['award_c'], false); ?>
        </div>
        <div> 
            <?php renderText($datos['static_blocks']['award_d'], false); ?>
            <?php renderImage($datos['static_blocks']['award_d'], false); ?>
        </div>
        <div> 
            <?php renderText($datos['static_blocks']['award_e'], false); ?>
            <?php renderImage($datos['static_blocks']['award_e'], false); ?>
        </div>
    </section>
</div>