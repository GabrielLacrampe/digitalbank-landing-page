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
    ?>
</section>