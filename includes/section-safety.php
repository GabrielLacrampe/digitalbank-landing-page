<?php 
// Accedemos directamente a la sección que nos interesa mediante su llave
$mi_seccion = $web_data['section-safety']; 
$datos = $mi_seccion['contenido']; 
?>

<section id="safety">

    <h1 class="static-title"><?php echo $datos['static_blocks']['title']; ?></h1>
    
    <img class="static-image placeholder-image" src="../assets/media/<?php echo $datos['static_blocks']['image']; ?>" alt="<?php echo $datos['static_blocks']['alt']; ?>">
    
    <p class="static-text"><?php echo $datos['static_blocks']['description']; ?></p>

    <div>
        <div class="static-button button-style hidden-mobile"><a href="<?php echo $datos['static_blocks']['button']['url']; ?>"><span><?php echo $datos['static_blocks']['button']['button_text']; ?></span></a></div>
    </div>

</section>