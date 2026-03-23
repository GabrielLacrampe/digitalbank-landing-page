<?php 
// Accedemos directamente a la sección que nos interesa mediante su llave
$mi_seccion = $web_data['section-links']; 
$datos = $mi_seccion['contenido']; 
?>
<!-- En movil se transforman en desplegables, solo se ve el titulo-->
<section id="section-links" class="bottom-links-container">
    <?php 
    // Renderizamos las listas A, B y C
    // Cada una detectará automáticamente cuántos links (A-F) tiene dentro
    renderListGroup($datos['static_blocks']['list_a']); 
    renderListGroup($datos['static_blocks']['list_b']); 
    renderListGroup($datos['static_blocks']['list_c']); 
    ?>
</section>