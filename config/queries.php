<?php
    $sql = "SELECT id, titulo, nombre_archivo, descripcion FROM fotos";
    $stmt = $pdo->query($sql);
    $fotos = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $contenido = []; foreach ($fotos as $foto) { $contenido[$foto['id']] = $foto; }
    ?>