<?php
function renderImage($imageData, $classes = '') {
    if (empty($imageData)) return;

    // Limpiamos los datos para evitar errores
    $image = $imageData['image'] ?? '#';
    $alt = $imageData['alt'] ?? 'alt text';

    ?>
    <img class="<?php echo trim($classes); ?>" src="../assets/media/<?php echo $image; ?>" alt="<?php echo $alt; ?>">
    <?php
}