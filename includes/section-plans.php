<?php
// Accedemos directamente a la sección que nos interesa mediante su llave
$mi_seccion = $web_data['section-plans'];
$datos = $mi_seccion['contenido'];
// Definimos los grupos de planes
$plans_group1 = ['plan_standard', 'plan_plus', 'plan_premium'];
$plans_group2 = ['plan_metal', 'plan_ultra'];
?>
<section id="section-plans">
    <?php renderTitle(['title' => $datos['static_blocks']['title']], false, 'hero__content', 2); ?>
    <ul class="u-flex-row">
        <?php renderPlanGroup($plans_group1, $datos); ?>
    </ul>

    <ul class="u-flex-row">
        <?php renderPlanGroup($plans_group2, $datos); ?>
    </ul>
</section>
