<?php 
$mi_seccion = $web_data['header']; 
$datos = $mi_seccion['contenido']; 
?>

<div class="horizontal-container">
    <div class="">
        <?php renderImage($datos['static_blocks'], false, 'header-logo'); ?>
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