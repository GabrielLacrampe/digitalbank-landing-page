<?php
// TODO: extender funcion para soportar diferentes tamaños de titulo h1, h2, h3 
function renderTitle($textData, $classes = '', $level = 1) {
    if (empty($textData)) return;

    // Limpiamos los datos para evitar errores
    $text = $textData['title'] ?? '';

    ?>
    <h<?php echo $level; ?> class="<?php echo trim($classes); ?>"><?php echo $text; ?></h<?php echo $level; ?>>
    <?php
}