<?php
function renderControllers($datos, $containerClasses = 'tabs', $buttonClasses = 'btn tab-btn') {
    ?>
    <div class="<?php echo trim($containerClasses); ?>">
        <?php foreach ($datos as $btn): ?>
            <button class="<?php echo trim($buttonClasses); ?>" data-target="<?php echo $btn['target_data']; ?>">
                <?php echo $btn['label']; ?>
            </button>
        <?php endforeach; ?>
    </div>
    <?php
}