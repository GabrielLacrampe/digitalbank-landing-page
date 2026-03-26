<?php 
// Accedemos directamente a la sección que nos interesa mediante su llave
$mi_seccion = $web_data['section-plans']; 
$datos = $mi_seccion['contenido']; 
?>
<section id="section-plans">
    <h2 class="static-title"><?php echo $datos['static_blocks']['title']; ?></h2>
    <ul class="plan-container">
        <li>
            <?php renderPlan($datos['static_blocks']['plans']['plan_standard']); ?>
        </li>
        <li>
            <?php renderPlan($datos['static_blocks']['plans']['plan_plus']); ?>
        </li>
        <li>
            <?php renderPlan($datos['static_blocks']['plans']['plan_premium']); ?>
        </li>
    </ul>

    <ul class="plan-container">
       <li>
            <?php renderPlan($datos['static_blocks']['plans']['plan_metal']); ?>
        </li>
        <li>
            <?php renderPlan($datos['static_blocks']['plans']['plan_ultra']); ?>
        </li>
    </ul>
</section>
