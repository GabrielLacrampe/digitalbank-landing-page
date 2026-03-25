<?php 
// Accedemos directamente a la sección que nos interesa mediante su llave
$mi_seccion = $web_data['section-hero']; 
$datos = $mi_seccion['contenido']; 
?>
<div class="contenido-hero testing-box">
    <img class="fondo-animado" src="../assets/media/<?php echo $datos['static_blocks']['images']['image_a']['url']; ?>" alt="<?php echo $datos['static_blocks']['images']['image_a']['alt']; ?>">
    <div class="testing-box hero-30"></div>
        <div class="testing-box hero-content-interior">
            <h1 class="hero-content-title"><?php echo $datos['static_blocks']['group_a']['title']; ?></h1>
            <p class="hero-content-paragraph"><?php echo $datos['static_blocks']['group_a']['description']; ?></p>
            <?php renderButton($datos['static_blocks']['group_a']['button'], false, 'hero-content-button'); ?>
        </div>
    <div class="testing-box hero-30"></div>     
</div>
