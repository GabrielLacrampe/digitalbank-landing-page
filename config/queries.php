<?php
    $sql = "SELECT id, titulo, nombre_archivo, descripcion FROM fotos";
    $stmt = $pdo->query($sql);
    $fotos = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $contenido = []; foreach ($fotos as $foto) { $contenido[$foto['id']] = $foto; }

    // Preparamos la consulta para la sección específica
    $query = $pdo->prepare("SELECT * FROM secciones_dinamicas WHERE html_id = 'section-test' LIMIT 1");
    $query->execute();
    $seccion = $query->fetch(PDO::FETCH_ASSOC);

    // Verificación de seguridad: si no existe, creamos un array vacío para que no explote el PHP
    if (!$seccion) {
        $seccion = ['contenido_json' => '[]']; 
    }
?>