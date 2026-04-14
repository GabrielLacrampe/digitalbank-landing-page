<?php
// COMPONENTE HIJO: Renderiza un solo enlace
function renderLink($linkData, $classes = 'links__item') {
    if (empty($linkData)) return;
    ?>
    <li class="<?php echo trim($classes); ?>">
        <a href="<?php echo htmlspecialchars($linkData['url']); ?>">
            <span><?php echo htmlspecialchars($linkData['button_text']); ?></span>
        </a>
    </li>
    <?php
}

// COMPONENTE PADRE: Renderiza la lista completa y llama a los hijos
function renderListGroup($listData, $containerClasses = 'links__list', $titleClasses = 'hero__content') {
    if (empty($listData)) return;
    ?>
    <div class="<?php echo trim($containerClasses); ?>">
        <p class="<?php echo trim($titleClasses); ?>"><?php echo htmlspecialchars($listData['title']); ?></p>
        <ul>
            <?php 
            // Recorremos todos los elementos de la lista que empiecen por 'link_'
            foreach ($listData as $key => $value) {
                if (strpos($key, 'link_') === 0) {
                    renderLink($value);
                }
            }
            ?>
        </ul>
    </div>
    <?php
}