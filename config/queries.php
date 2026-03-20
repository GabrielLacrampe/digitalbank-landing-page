<?php
    $sql = "SELECT id, titulo, nombre_archivo, descripcion FROM fotos";
    $stmt = $pdo->query($sql);
    $fotos = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $contenido = []; foreach ($fotos as $foto) { $contenido[$foto['id']] = $foto; }

   
    // 1. Traemos TODAS las secciones activas
    $query = $pdo->query("SELECT * FROM secciones_dinamicas ORDER BY orden ASC");
    $todas_las_secciones = $query->fetchAll(PDO::FETCH_ASSOC);

    // 2. Creamos un "Mapa" indexado por el html_id
    $web_data = [];

    foreach ($todas_las_secciones as $s) {
        // Usamos el html_id como llave del array
        $web_data[$s['html_id']] = [
            'id'        => $s['id'],
            'nombre'    => $s['nombre_interno'],
            'contenido' => json_decode($s['contenido_json'], true) // Decodificamos aquí mismo
        ];
    }

    // Opcional: Función de seguridad para evitar errores si una sección no existe en la BD
    function getSection($id, $data) {
        return $data[$id] ?? ['contenido' => []];
    }
?>