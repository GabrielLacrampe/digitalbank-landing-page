<?php 
// Accedemos directamente a la sección que nos interesa mediante su llave
$mi_seccion = $web_data['section-finalinfo']; 
$datos = $mi_seccion['contenido']; 
?>

<section id="finalinfo">

    <h1 class="static-title"><?php echo $datos['bloques_fijos']['title']; ?></h1>
    
    <img class="placeholder-image" src="../assets/media/<?php echo $datos['bloques_fijos']['imagen']; ?>" alt="<?php echo $datos['bloques_fijos']['title']; ?>">
    
    <p class="static-text"><?php echo $datos['bloques_fijos']['description']; ?></p>

    <div>
        <div class="button-style hidden-mobile"><a href="<?php echo $datos['bloques_fijos']['botton']['url']; ?>"><span><?php echo $datos['bloques_fijos']['botton']['texto']; ?></span></a></div>
    </div>

</section>