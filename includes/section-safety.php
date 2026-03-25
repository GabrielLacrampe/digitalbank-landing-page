<?php 
// Accedemos directamente a la sección que nos interesa mediante su llave
$mi_seccion = $web_data['section-safety']; 
$datos = $mi_seccion['contenido']; 
?>
<div class="testing-box">
    <section id="safety">
        <h1 class="static-title"><?php echo $datos['static_blocks']['title']; ?></h1>

        <?php renderImage($datos['static_blocks'], false); ?>

        <p class="static-text"><?php echo $datos['static_blocks']['description']; ?></p>
        
        <div>
            <?php renderButton($datos['static_blocks']['button'], false); ?>
        </div>
    </section>
</div>