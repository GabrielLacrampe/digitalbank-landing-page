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
function renderAllButtons($dataBlock, $isDynamic = false) {
    if (!is_array($dataBlock)) return;

    foreach ($dataBlock as $key => $value) {
        if (strpos($key, 'button_') === 0 && is_array($value)) {
            $classes = $isDynamic ? "btn dynamic-button btn-{$key}" : "btn btn-{$key}";
            renderButton($value, $classes);
        }
    }
}