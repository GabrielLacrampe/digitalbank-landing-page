<?php 
// Accedemos directamente a la sección que nos interesa mediante su llave
$mi_seccion = $web_data['section-plans']; 
$datos = $mi_seccion['contenido']; 
?>
<section id="section-plans">
    <h2 class="static-title"><?php echo $datos['static_blocks']['title']; ?></h2>
    <ul class="plan-container">
        <li>
            <a href="<?php echo $datos['static_blocks']['plans']['plan_standard']['url']; ?>">
                <div class="plan-style">
                    <span>
                        <h2><?php echo $datos['static_blocks']['plans']['plan_standard']['title']; ?></h2>
                    </span>
                    <h3><?php echo $datos['static_blocks']['plans']['plan_standard']['price']; ?></h3>
                    <p><?php echo $datos['static_blocks']['plans']['plan_standard']['description']; ?></p>
                </div>
            </a>
        </li>
        <li>
            <a href="<?php echo $datos['static_blocks']['plans']['plan_plus']['url']; ?>">
                <div class="plan-style">
                    <span>
                        <h2><?php echo $datos['static_blocks']['plans']['plan_plus']['title']; ?></h2>
                    </span>
                    <h3><?php echo $datos['static_blocks']['plans']['plan_plus']['price']; ?></h3>
                    <p><?php echo $datos['static_blocks']['plans']['plan_plus']['description']; ?></p>
                </div>
            </a>
        </li>
        <li>
            <a href="<?php echo $datos['static_blocks']['plans']['plan_premium']['url']; ?>">
                <div class="plan-style">
                    <span>
                        <h2><?php echo $datos['static_blocks']['plans']['plan_premium']['title']; ?></h2>
                    </span>
                    <h3><?php echo $datos['static_blocks']['plans']['plan_premium']['price']; ?></h3>
                    <p><?php echo $datos['static_blocks']['plans']['plan_premium']['description']; ?></p>
                </div>
            </a>
        </li>
    </ul>

    <ul class="plan-container">
       <li>
            <a href="<?php echo $datos['static_blocks']['plans']['plan_metal']['url']; ?>">
                <div class="plan-style">
                    <span>
                        <h2><?php echo $datos['static_blocks']['plans']['plan_metal']['title']; ?></h2>
                    </span>
                    <h3><?php echo $datos['static_blocks']['plans']['plan_metal']['price']; ?></h3>
                    <p><?php echo $datos['static_blocks']['plans']['plan_metal']['description']; ?></p>
                </div>
            </a>
        </li>
        <li>
            <a href="<?php echo $datos['static_blocks']['plans']['plan_ultra']['url']; ?>">
                <div class="plan-style">
                    <span>
                        <h2><?php echo $datos['static_blocks']['plans']['plan_ultra']['title']; ?></h2>
                    </span>
                    <h3><?php echo $datos['static_blocks']['plans']['plan_ultra']['price']; ?></h3>
                    <p><?php echo $datos['static_blocks']['plans']['plan_ultra']['description']; ?></p>
                </div>
            </a>
        </li>
    </ul>
</section>
