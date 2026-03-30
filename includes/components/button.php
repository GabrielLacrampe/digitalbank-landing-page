<?php
function renderButton($buttonData, $isDynamic = false, $extraClasses = '') {
    if (empty($buttonData)) return;

    // Decidimos la clase principal según el tipo
    $typeClass = $isDynamic ? 'dynamic-button' : 'static-button';
    
    // Construimos el string de clases final
    $allClasses = "{$typeClass} btn {$extraClasses}";

    // Limpiamos los datos para evitar errores
    $url = $buttonData['url'] ?? '#';
    $text = $buttonData['button_text'] ?? 'Click';

    ?>
    <div class="<?php echo trim($allClasses); ?>">
        <a class="<?php echo $extraClasses; ?>" href="<?php echo $url; ?>">
            <span><?php echo $text; ?></span>
        </a>
    </div>
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