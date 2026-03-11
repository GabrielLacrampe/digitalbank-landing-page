<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>

<body>

    <!-- Abrimos la conexion -->
    <?php
    require '../config/db.php';

    $sql = "SELECT id, titulo, nombre_archivo, descripcion FROM fotos ORDER BY id DESC";
    $stmt = $pdo->query($sql);
    $fotos = $stmt->fetchAll();
    ?>
    <!-- Pintamos las fotos -->
    <div class="galeria">
        <?php foreach ($fotos as $foto): ?>
            <div class="foto">
                <h3><?= htmlspecialchars($foto['titulo']) ?></h3>
                <img src="../assets/media/<?= htmlspecialchars($foto['nombre_archivo']) ?>"
                    alt="<?= htmlspecialchars($foto['titulo']) ?>">
                <p><?= htmlspecialchars($foto['descripcion']) ?></p>
            </div>
        <?php endforeach; ?>
    </div>

    <header>Soy el encabezado</header>
    <main class="contenido">
        <section id="presentacion">presentacion</section>
        <section id="galeria">presentacion</section>
        <section id="usuarios">presentacion</section>
        <section id="roles">presentacion</section>
    </main>
    <footer>Soy el footer</footer>
</body>

</html>