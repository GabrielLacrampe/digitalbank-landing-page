<?php
function renderText($textData, $isDynamic = false, $extraClasses = '') {
    if (empty($textData)) return;

    // Decidimos la clase principal según el tipo
    $typeClass = $isDynamic ? 'dynamic-text' : 'static-text';
    
    // Construimos el string de clases final
    $allClasses = "{$typeClass} {$extraClasses}";

    // Limpiamos los datos para evitar errores
    $text = $textData['description'] ?? '';

    ?>
    <p class="<?php echo trim($allClasses); ?>"><?php echo $text; ?></p>
    <?php
}