<?php 
// Accedemos directamente a la sección que nos interesa mediante su llave
$mi_seccion = $web_data['section-links']; 
$datos = $mi_seccion['contenido']; 
?>
<!-- En movil se transforman en desplegables, solo se ve el titulo-->
<section id="section-links" class="bottom-links-container">
    <ul >
        <div class="list-of-links">
            <p><?php echo $datos['static_blocks']['list_a']['title']; ?></p>
            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_a']['link_a']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_a']['link_a']['button_text']; ?></p>
            </a>

            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_a']['link_b']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_a']['link_b']['button_text']; ?></p>
            </a>

            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_a']['link_c']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_a']['link_c']['button_text']; ?></p>
            </a>

            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_a']['link_d']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_a']['link_d']['button_text']; ?></p>
            </a>

            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_a']['link_e']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_a']['link_e']['button_text']; ?></p>
            </a>
            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_a']['link_f']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_a']['link_f']['button_text']; ?></p>
            </a>
        </div>
    </ul>
    
    <ul >
        <div class="list-of-links">
            <p><?php echo $datos['static_blocks']['list_b']['title']; ?></p>
            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_b']['link_a']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_b']['link_a']['button_text']; ?></p>
            </a>

            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_b']['link_b']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_b']['link_b']['button_text']; ?></p>
            </a>

            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_b']['link_c']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_b']['link_c']['button_text']; ?></p>
            </a>

            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_b']['link_d']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_b']['link_d']['button_text']; ?></p>
            </a>

            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_b']['link_e']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_b']['link_e']['button_text']; ?></p>
            </a>
            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_b']['link_f']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_b']['link_f']['button_text']; ?></p>
            </a>
        </div>
    </ul>
    <ul >
        <div class="list-of-links">
            <p><?php echo $datos['static_blocks']['list_c']['title']; ?></p>
            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_c']['link_a']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_c']['link_a']['button_text']; ?></p>
            </a>

            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_c']['link_b']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_c']['link_b']['button_text']; ?></p>
            </a>

            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_c']['link_c']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_c']['link_c']['button_text']; ?></p>
            </a>

            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_c']['link_d']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_c']['link_d']['button_text']; ?></p>
            </a>

            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_c']['link_e']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_c']['link_e']['button_text']; ?></p>
            </a>
            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_c']['link_f']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_c']['link_f']['button_text']; ?></p>
            </a>
        </div>
    </ul>
    <ul >
        <div class="list-of-links">
            <p><?php echo $datos['static_blocks']['list_d']['title']; ?></p>
            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_d']['link_a']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_d']['link_a']['button_text']; ?></p>
            </a>

            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_d']['link_b']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_d']['link_b']['button_text']; ?></p>
            </a>

            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_d']['link_c']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_d']['link_c']['button_text']; ?></p>
            </a>

            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_d']['link_d']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_d']['link_d']['button_text']; ?></p>
            </a>

            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_d']['link_e']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_d']['link_e']['button_text']; ?></p>
            </a>
            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_d']['link_f']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_d']['link_f']['button_text']; ?></p>
            </a>
        </div>
    </ul>
    <ul >
        <div class="list-of-links">
            <p><?php echo $datos['static_blocks']['list_e']['title']; ?></p>
            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_e']['link_a']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_e']['link_a']['button_text']; ?></p>
            </a>

            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_e']['link_b']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_e']['link_b']['button_text']; ?></p>
            </a>

            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_e']['link_c']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_e']['link_c']['button_text']; ?></p>
            </a>

            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_e']['link_d']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_e']['link_d']['button_text']; ?></p>
            </a>

            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_e']['link_e']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_e']['link_e']['button_text']; ?></p>
            </a>
            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_e']['link_f']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_e']['link_f']['button_text']; ?></p>
            </a>
        </div>
    </ul>
    <ul >
        <div class="list-of-links">
            <p><?php echo $datos['static_blocks']['list_f']['title']; ?></p>
            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_f']['link_a']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_f']['link_a']['button_text']; ?></p>
            </a>

            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_f']['link_b']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_f']['link_b']['button_text']; ?></p>
            </a>

            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_f']['link_c']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_f']['link_c']['button_text']; ?></p>
            </a>

            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_f']['link_d']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_f']['link_d']['button_text']; ?></p>
            </a>

            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_f']['link_e']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_f']['link_e']['button_text']; ?></p>
            </a>
            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_f']['link_f']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_f']['link_f']['button_text']; ?></p>
            </a>
        </div>
    </ul>
    <ul >
        <div class="list-of-links">
            <p><?php echo $datos['static_blocks']['list_g']['title']; ?></p>
            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_g']['link_a']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_g']['link_a']['button_text']; ?></p>
            </a>

            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_g']['link_b']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_g']['link_b']['button_text']; ?></p>
            </a>

            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_g']['link_c']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_g']['link_c']['button_text']; ?></p>
            </a>

            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_g']['link_d']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_g']['link_d']['button_text']; ?></p>
            </a>

            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_g']['link_e']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_g']['link_e']['button_text']; ?></p>
            </a>
            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_g']['link_f']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_g']['link_f']['button_text']; ?></p>
            </a>
        </div>
    </ul>
    <ul >
        <div class="list-of-links">
            <p><?php echo $datos['static_blocks']['list_h']['title']; ?></p>
            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_h']['link_a']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_h']['link_a']['button_text']; ?></p>
            </a>

            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_h']['link_b']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_h']['link_b']['button_text']; ?></p>
            </a>

            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_h']['link_c']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_h']['link_c']['button_text']; ?></p>
            </a>

            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_h']['link_d']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_h']['link_d']['button_text']; ?></p>
            </a>

            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_h']['link_e']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_h']['link_e']['button_text']; ?></p>
            </a>
            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_h']['link_f']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_h']['link_f']['button_text']; ?></p>
            </a>
        </div>
    </ul>
    <ul >
        <div class="list-of-links">
            <p><?php echo $datos['static_blocks']['list_i']['title']; ?></p>
            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_i']['link_a']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_i']['link_a']['button_text']; ?></p>
            </a>

            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_i']['link_b']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_i']['link_b']['button_text']; ?></p>
            </a>

            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_i']['link_c']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_i']['link_c']['button_text']; ?></p>
            </a>

            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_i']['link_d']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_i']['link_d']['button_text']; ?></p>
            </a>

            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_i']['link_e']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_i']['link_e']['button_text']; ?></p>
            </a>
            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_i']['link_f']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_i']['link_f']['button_text']; ?></p>
            </a>
        </div>
    </ul>
    <ul >
        <div class="list-of-links">
            <p><?php echo $datos['static_blocks']['list_j']['title']; ?></p>
            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_j']['link_a']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_j']['link_a']['button_text']; ?></p>
            </a>

            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_j']['link_b']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_j']['link_b']['button_text']; ?></p>
            </a>

            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_j']['link_c']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_j']['link_c']['button_text']; ?></p>
            </a>

            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_j']['link_d']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_j']['link_d']['button_text']; ?></p>
            </a>

            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_j']['link_e']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_j']['link_e']['button_text']; ?></p>
            </a>
            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_j']['link_f']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_j']['link_f']['button_text']; ?></p>
            </a>
        </div>
    </ul>
    <ul >
        <div class="list-of-links">
            <p><?php echo $datos['static_blocks']['list_k']['title']; ?></p>
            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_k']['link_a']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_k']['link_a']['button_text']; ?></p>
            </a>

            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_k']['link_b']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_k']['link_b']['button_text']; ?></p>
            </a>

            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_k']['link_c']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_k']['link_c']['button_text']; ?></p>
            </a>

            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_k']['link_d']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_k']['link_d']['button_text']; ?></p>
            </a>

            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_k']['link_e']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_k']['link_e']['button_text']; ?></p>
            </a>
            <a class="link-listed" href="<?php echo $datos['static_blocks']['list_k']['link_f']['url']; ?>">
                <p><?php echo $datos['static_blocks']['list_k']['link_f']['button_text']; ?></p>
            </a>
        </div>
    </ul>
</section>