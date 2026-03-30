<?php
function renderButton($buttonData, $isDynamic = false, $extraClasses = '') {
    if (empty($buttonData)) return;

    // Determinamos la clase de tipo
    $typeClass = $isDynamic ? 'btn--dynamic' : 'btn--static';
    
    // Construimos las clases finales
    $allClasses = "btn {$typeClass} {$extraClasses}";

    // Limpiamos los datos
    $url = $buttonData['url'] ?? '#';
    $text = $buttonData['button_text'] ?? 'Click';

    ?>
    <a class="<?php echo trim($allClasses); ?>" href="<?php echo htmlspecialchars($url); ?>">
        <?php echo htmlspecialchars($text); ?>
    </a>
    <?php
}

// TODO: este metodo no me termina de encajar
function renderAllButtons($dataBlock, $isDynamic = false) {
    if (!is_array($dataBlock)) return;

    foreach ($dataBlock as $key => $value) {
        if (strpos($key, 'button_') === 0 && is_array($value)) {
            renderButton($value, $isDynamic, "btn-{$key}");
        }
    }
}