<?php 
$mi_seccion = $web_data['header']; 
$datos = $mi_seccion['contenido']; 
?>
<div class="u-flex-row">
    <div>
        <?php renderImage($datos['static_blocks'], 'logo'); ?>
    </div>

    <span class="u-flex-row">
        <?php renderAllButtons($datos['static_blocks'], false, ['login', 'register']); ?>
    </span>

    <div style="flex: 1;"></div>

    <span class="u-flex-row">
        <?php renderSpecificButtons($datos['static_blocks'], ['login', 'register'], false); ?>
    </span>

    <div>
        <i class="bi bi-menu-button-wide is-hidden-desktop"></i>
    </div>
</div>