<?php 
$mi_seccion = $web_data['header']; 
$datos = $mi_seccion['contenido']; 
?>

<div class="horizontal-container">
    <div class="">
        <img class="header-logo" src="../assets/media/<?php echo $datos['static_blocks']['image']; ?>" alt="<?php echo $datos['static_blocks']['alt']; ?>">
    </div>

    <div class="horizontal-container width100">
        <span class="horizontal-container">
            <?php 
                // TODO: este metodo no me termina
                renderAllButtons($datos['static_blocks'], false);
            ?>
        </span>
    </div>
    <div>
        <i class="bi bi-menu-button-wide solo-desktop"></i>
    </div>
</div>