<?php 
    // Accedemos directamente a la sección que nos interesa mediante su llave
    $mi_seccion = $web_data['section-awards_references']; 
    $datos = $mi_seccion['contenido']; 
?>
<section id="awards-references" class="main__section awards-references">
    <?php renderTitle($datos['static_blocks']); ?>

    <div class="awards-references__grid">
        <?php
            $awards = [
                'award_a',
                'award_b',
                'award_c',
                'award_d',
                'award_e',
            ];

            foreach ($awards as $award) :
                $item = $datos['static_blocks'][$award] ?? null;
                if (empty($item)) continue;
        ?>
            <article class="awards-references__item">
                <div class="awards-references__media">
                    <?php renderImage($item, 'awards-references__image'); ?>
                </div>
                <?php renderText($item, 'awards-references__text'); ?>
            </article>
        <?php endforeach; ?>
    </div>
</section>