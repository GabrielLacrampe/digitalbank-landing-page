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

// Función para renderizar un grupo de planes
function renderPlanGroup($plans_group, $datos) {
    foreach ($plans_group as $plan_key) {
        if (isset($datos['static_blocks']['plans'][$plan_key])) {
            echo '<li>';
            renderPlan($datos['static_blocks']['plans'][$plan_key]);
            echo '</li>';
        }
    }
}