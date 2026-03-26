<?php
// TODO: extender funcion para soportar diferentes tamaños de titulo h1, h2, h3 
function renderTitle($textData, $isDynamic = false, $extraClasses = '', $level = 1) {
    if (empty($textData)) return;

    // Decidimos la clase principal según el tipo
    $typeClass = $isDynamic ? 'dynamic-title' : 'static-title';
    
    // Construimos el string de clases final
    $allClasses = "{$typeClass} {$extraClasses}";

    // Limpiamos los datos para evitar errores
    $text = $textData['title'] ?? '';

    ?>
    <h<?php echo $level; ?> class="<?php echo trim($allClasses); ?>"><?php echo $text; ?></h<?php echo $level; ?>>
    <?php
}