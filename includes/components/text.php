<?php
function renderText($textData, $classes = '') {
    if (empty($textData)) return;

    // Limpiamos los datos para evitar errores
    $text = $textData['description'] ?? '';

    ?>
    <p class="<?php echo trim($classes); ?>"><?php echo $text; ?></p>
    <?php
}