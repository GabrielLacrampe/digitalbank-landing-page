<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Insertar Foto</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>

<body>

<?php
require '../config/db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $titulo = $_POST['titulo'] ?? '';
    $descripcion = $_POST['descripcion'] ?? '';
    $url = $_POST['url'] ?? '';

    if (!empty($titulo) && !empty($url)) {

        $sql = "INSERT INTO fotos (titulo, descripcion, nombre_archivo, fecha_subida) 
                VALUES (:titulo, :descripcion, :url, NOW())";

        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':titulo' => $titulo,
            ':descripcion' => $descripcion,
            ':url' => $url
        ]);

        echo "<p>Foto insertada correctamente</p>";
    } else {
        echo "<p>El título y la URL son obligatorios</p>";
    }
}
?>

<h2>Insertar nueva foto</h2>

<form method="POST">
    <label>Título:</label><br>
    <input type="text" name="titulo" required><br><br>

    <label>Descripción:</label><br>
    <textarea name="descripcion"></textarea><br><br>

    <label>URL de la imagen:</label><br>
    <input type="text" name="url" required><br><br>

    <button type="submit">Guardar</button>
</form>


</body>
</html>