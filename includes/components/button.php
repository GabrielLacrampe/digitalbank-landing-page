<?php
function renderButton($buttonData, $classes = 'btn') {
    if (empty($buttonData)) return;

    // Limpiamos los datos
    $url = $buttonData['url'] ?? '#';
    $text = $buttonData['button_text'] ?? 'Click';

    ?>
    <a class="<?php echo trim($classes); ?>" href="<?php echo htmlspecialchars($url); ?>">
        <?php echo htmlspecialchars($text); ?>
    </a>
    <?php
}

// TODO: este metodo no me termina de encajar
function renderAllButtons($dataBlock, $isDynamic = false, $exclude = []) {
    if (!is_array($dataBlock)) return;

    foreach ($dataBlock as $key => $value) {
        if (strpos($key, 'button_') === 0 && is_array($value)) {
            // Extraer el nombre del botón (ej: 'personal' de 'button_personal')
            $buttonName = str_replace('button_', '', $key);
            
            // Saltear si está en la lista de exclusión
            if (in_array($buttonName, $exclude)) continue;
            
            $classes = $isDynamic ? "btn dynamic-button btn-{$key}" : "btn btn-{$key}";
            renderButton($value, $classes);
        }
    }
}

// Renderiza solo los botones especificados
function renderSpecificButtons($dataBlock, $buttonNames = [], $isDynamic = false) {
    if (!is_array($dataBlock) || empty($buttonNames)) return;

    foreach ($buttonNames as $buttonName) {
        $key = 'button_' . $buttonName;
        if (isset($dataBlock[$key]) && is_array($dataBlock[$key])) {
            $classes = $isDynamic ? "btn dynamic-button btn-{$key}" : "btn btn-{$key}";
            renderButton($dataBlock[$key], $classes);
        }
    }
}