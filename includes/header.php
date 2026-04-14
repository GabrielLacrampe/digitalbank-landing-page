<?php 
$mi_seccion = $web_data['header']; 
$datos = $mi_seccion['contenido']; 
?>
<div class="u-flex-row">
    <div>
        <?php renderImage($datos['static_blocks'], 'logo'); ?>
    </div>

    <div class="u-flex-row u-width-full">
        <span class="u-flex-row">
            <?php renderAllButtons($datos['static_blocks'], false); ?>
        </span>
    </div>
    <div>
        <i class="bi bi-menu-button-wide is-hidden-desktop"></i>
    </div>
</div>