<!DOCTYPE html>
<html lang="en">
<?php require_once '../config/db.php'; ?>

<head>
    <?php include '../includes/head.php'; ?>
</head>

<body>   
    <?php
        $sql = "SELECT id, titulo, nombre_archivo, descripcion FROM fotos";
        $stmt = $pdo->query($sql);
        $fotos = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $contenido = []; foreach ($fotos as $foto) { $contenido[$foto['id']] = $foto; }
    ?>

    <header>
        <?php include '../includes/header.php'; ?>
    </header>

    <main>
        <div class="contenido-hero testing-box">
            <?php include '../includes/section-hero.php'; ?>
        </div>

        <div class="testing-box">
            <?php include '../includes/section-risk.php'; ?>
        </div>

        <div class="testing-box">
            <?php include '../includes/section-moreinfo.php'; ?>
        </div>

        <div class="testing-box">
            <h1>OTRA SECCIÓN CON VIDEO Y OPCIONES</h1>
            <img class=" placeholder-image" src="../assets/media/plant-8338691_1280.jpg" alt="Fondo">

        </div>

        <div class="testing-box">
            <h1>OTRA SECCIÓN CON VIDEO Y OPCIONES</h1>
            <img class=" placeholder-image" src="../assets/media/children-4894710_1280.jpg" alt="Fondo">

        </div>
        <div class="testing-box">
            <h1>OTRA SECCIÓN CON VIDEO Y OPCIONES</h1>
            <img class=" placeholder-image" src="../assets/media/credit-card-2439141_1280.jpg" alt="Fondo">

        </div>
        <div class="testing-box">
            <h1>OTRA SECCIÓN CON VIDEO Y OPCIONES</h1>
            <img class=" placeholder-image" src="../assets/media/plant-8338691_1280.jpg" alt="Fondo">

        </div>
        <div class="testing-box">
            <h1>SECCION CON MUCHO TEXTO</h1>
            <p>Únete a los Más de 65 millones de personas que ya utilizan Revolut
        </div>
    </main>
    
    <footer role="contentinfo" class="content-info">
        <?php include '../includes/footer.php'; ?>
    </footer>

    <script src="HeroAnim.js"></script>
</body>

</html>