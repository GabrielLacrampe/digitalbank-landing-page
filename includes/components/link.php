<?php
// COMPONENTE HIJO: Renderiza un solo enlace
// TODO necesito modificar el json de la section-links para incluir la class
// así podría usar el mismo componente para los enlaces del header y del footer, por ejemplo
function renderLink($linkData, $isDynamic = false, $extraClasses = '') {
    if (empty($linkData)) return;
    ?>
    <li>
        <a class="<?php echo $extraClasses; ?>" href="<?php echo $linkData['url']; ?>">
            <span><?php echo $linkData['button_text']; ?></span>
        </a>
    </li>
    <?php
}

// COMPONENTE PADRE: Renderiza la lista completa y llama a los hijos
function renderListGroup($listData, $isDynamic = false, $extraClasses = 'link-listed') {
    if (empty($listData)) return;
    ?>
    <div class="list-of-links">
        <p><?php echo $listData['title']; ?></p>
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