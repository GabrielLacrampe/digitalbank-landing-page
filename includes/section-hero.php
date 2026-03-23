<?php 
// Accedemos directamente a la sección que nos interesa mediante su llave
$mi_seccion = $web_data['section-hero']; 
$datos = $mi_seccion['contenido']; 
?>
<div class="contenido-hero testing-box">
    <img class="fondo-animado" src="../assets/media/<?php echo $datos['static_blocks']['images']['image_a']['url']; ?>" alt="<?php echo $datos['static_blocks']['images']['image_a']['alt']; ?>">
    <div class="testing-box hero-30"></div>
        <div class="testing-box hero-content-interior">
            <h1 class="hero-content-title color-white"><?php echo $datos['static_blocks']['group_a']['title']; ?></h1>
            <p class="hero-content-paragraph color-white"><?php echo $datos['static_blocks']['group_a']['description']; ?>
            </p>
            <div class="button-style hero-content-button">
                <a class="color-white" href="<?php echo $datos['static_blocks']['group_a']['button']['url']; ?>"> <span><?php echo $datos['static_blocks']['group_a']['button']['button_text']; ?></span></a>
            </div>
        </div>
    <div class="testing-box hero-30"></div>     
</div>
