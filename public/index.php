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
            <?php include '../includes/section-placeholder1.php'; ?>
        </div>
        <div class="testing-box">
            <?php include '../includes/section-placeholder2.php'; ?>
        </div>
        <div class="testing-box">
            <?php include '../includes/section-placeholder3.php'; ?>
        </div>
        <div class="testing-box">
            <?php include '../includes/section-placeholder4.php'; ?>
        </div>
        <div class="testing-box">
            <?php include '../includes/section-placeholder5.php'; ?>
        </div>
    </main>
    
    <footer role="contentinfo" class="content-info">
        <?php include '../includes/footer.php'; ?>
    </footer>

    <script src="HeroAnim.js"></script>
</body>

</html>