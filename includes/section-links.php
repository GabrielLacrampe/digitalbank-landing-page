<?php 
$mi_seccion = $web_data['section-links']; 
$datos = $mi_seccion['contenido']; 
?>
<!-- En movil se transforman en desplegables, solo se ve el titulo-->
<section id="section-links" class="links">
    <?php 
    renderListGroup($datos['static_blocks']['list_a']); 
    renderListGroup($datos['static_blocks']['list_b']); 
    renderListGroup($datos['static_blocks']['list_c']);
    renderListGroup($datos['static_blocks']['list_d']);
    renderListGroup($datos['static_blocks']['list_e']);
    renderListGroup($datos['static_blocks']['list_f']);
    renderListGroup($datos['static_blocks']['list_g']);
    renderListGroup($datos['static_blocks']['list_h']);
    renderListGroup($datos['static_blocks']['list_i']);
    renderListGroup($datos['static_blocks']['list_j']);
    renderListGroup($datos['static_blocks']['list_k']);
    ?>
</section>