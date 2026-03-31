<?php
function renderControllers($datos, $extraClasses = '') {
    if (empty($datos) || !is_array($datos)) return;

    $allClasses = "btn {$extraClasses}";

    ?>
    <div class="tabs">
        <?php foreach ($datos as $btn): ?>
            <button class="<?php echo trim($allClasses); ?>" data-target="<?php echo $btn['target_data']; ?>">
                <?php echo $btn['label']; ?>
            </button>
        <?php endforeach; ?>
    </div>
    <?php
}