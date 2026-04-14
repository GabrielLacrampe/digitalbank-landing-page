<?php
function renderPlan($planData, $classes = 'card') {
    if (empty($planData)) return;

    // Limpiamos los datos para evitar errores
    $url = $planData['url'] ?? '#';
    $title = ['title' => $planData['title'] ?? ''];
    $price = ['title' => $planData['price'] ?? ''];
    $description = ['description' => $planData['description'] ?? ''];

    ?>
    <a href="<?php echo $url; ?>">
        <div class="<?php echo trim($classes); ?>">
            <span>
                <?php renderTitle($title, '', 2); ?>
            </span>
            <?php renderTitle($price, '', 3); ?>
            <?php renderText($description); ?>
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