<?php
// COMPONENTE HIJO: Renderiza un solo enlace
function renderLink($linkData) {
    if (empty($linkData)) return;
    ?>
    <li>
        <a class="link-listed" href="<?php echo $linkData['url']; ?>">
            <span><?php echo $linkData['button_text']; ?></span>
        </a>
    </li>
    <?php
}

// COMPONENTE PADRE: Renderiza la lista completa y llama a los hijos
function renderListGroup($listData) {
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