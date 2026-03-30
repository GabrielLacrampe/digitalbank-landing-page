<?php
// COMPONENTE HIJO: Renderiza un solo enlace
function renderLink($linkData, $isDynamic = false, $extraClasses = '') {
    if (empty($linkData)) return;
    ?>
    <li class="links__item">
        <a href="<?php echo htmlspecialchars($linkData['url']); ?>">
            <span><?php echo htmlspecialchars($linkData['button_text']); ?></span>
        </a>
    </li>
    <?php
}

// COMPONENTE PADRE: Renderiza la lista completa y llama a los hijos
function renderListGroup($listData, $isDynamic = false, $extraClasses = '') {
    if (empty($listData)) return;
    ?>
    <div class="links__list">
        <p class="hero__content"><?php echo htmlspecialchars($listData['title']); ?></p>
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