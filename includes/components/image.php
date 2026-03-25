<?php
function renderImage($imageData, $isDynamic = false, $extraClasses = '') {
    if (empty($imageData)) return;

    // Decidimos la clase principal según el tipo
    $typeClass = $isDynamic ? 'dynamic-image' : 'static-image';
    
    // Construimos el string de clases final
    $allClasses = "{$typeClass} {$extraClasses}";

    // Limpiamos los datos para evitar errores
    $url = $imageData['url'] ?? '#';
    $alt = $imageData['alt'] ?? 'Image';

    ?>
    <img class="<?php echo trim($allClasses); ?>" src="../assets/media/<?php echo $url; ?>" alt="<?php echo $alt; ?>">
    <?php
}