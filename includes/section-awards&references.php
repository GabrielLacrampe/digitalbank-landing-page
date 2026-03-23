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
            <img class="static-image" src="../assets/media/<?php echo $datos['static_blocks']['award_a']['image']; ?>" alt="<?php echo $datos['static_blocks']['award_a']['alt']; ?>">
        </div>
        <div> 
            <p class="static-text"><?php echo $datos['static_blocks']['award_b']['description']; ?></p>
            <img class="static-image" src="../assets/media/<?php echo $datos['static_blocks']['award_b']['image']; ?>" alt="<?php echo $datos['static_blocks']['award_b']['alt']; ?>">
        </div>
        <div> 
            <p class="static-text"><?php echo $datos['static_blocks']['award_c']['description']; ?></p>
            <img class="static-image" src="../assets/media/<?php echo $datos['static_blocks']['award_c']['image']; ?>" alt="<?php echo $datos['static_blocks']['award_c']['alt']; ?>">
        </div>
        <div> 
            <p class="static-text"><?php echo $datos['static_blocks']['award_d']['description']; ?></p>
            <img class="static-image" src="../assets/media/<?php echo $datos['static_blocks']['award_d']['image']; ?>" alt="<?php echo $datos['static_blocks']['award_d']['alt']; ?>">
        </div>
        <div> 
            <p class="static-text"><?php echo $datos['static_blocks']['award_e']['description']; ?></p>
            <img class="static-image" src="../assets/media/<?php echo $datos['static_blocks']['award_e']['image']; ?>" alt="<?php echo $datos['static_blocks']['award_e']['alt']; ?>">
        </div>
        <div> 
            <p class="static-text"><?php echo $datos['static_blocks']['award_f']['description']; ?></p>
            <img class="static-image" src="../assets/media/<?php echo $datos['static_blocks']['award_f']['image']; ?>" alt="<?php echo $datos['static_blocks']['award_f']['alt']; ?>">
        </div>
    </section>
</div>