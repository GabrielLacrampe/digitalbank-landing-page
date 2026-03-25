<?php
function renderControllers($datos){
    ?>
    <div class="tabs">
        <?php foreach ($datos as $btn): ?>
            <button class="tab-btn" data-target="<?php echo $btn['target_data']; ?>">
                <?php echo $btn['label']; ?>
            </button>
        <?php endforeach; ?>
    </div>
    <?php
}