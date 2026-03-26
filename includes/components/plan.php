<?php
function renderPlan($planData, $isDynamic = false, $extraClasses = '') {
    if (empty($planData)) return;

    // Limpiamos los datos para evitar errores
    $url = $planData['url'] ?? '#';
    $title = ['title' => $planData['title'] ?? ''];
    $price = ['title' => $planData['price'] ?? ''];
    $description = ['description' => $planData['description'] ?? ''];

    ?>
    <a href="<?php echo $url; ?>">
        <div class="plan-style <?php echo $extraClasses; ?>">
            <span>
                <?php renderTitle($title, $isDynamic, '', 2); ?>
            </span>
            <?php renderTitle($price, $isDynamic, '', 3); ?>
            <?php renderText($description, $isDynamic); ?>
        </div>
    </a>
    <?php
}