<!DOCTYPE html>
<html lang="en">
<?php require_once '../config/db.php'; ?>

<head>
    <?php include '../includes/head.php'; ?>
</head>

<body>   
    <?php require_once '../config/queries.php'; ?>

    <header>
        <?php include '../includes/header.php'; ?>
    </header>

    <main>
        <div class="contenido-hero testing-box">
            <?php include '../includes/section-hero.php'; ?>
        </div>
        <div class="testing-box">
            <?php include '../includes/section-awards&references.php'; ?>
        </div>
        <div class="testing-box">
            <?php include '../includes/section-cards.php'; ?>
        </div>
        <div class="testing-box">
            <?php include '../includes/section-savings.php'; ?>
        </div>
        <div class="testing-box">
            <?php include '../includes/section-safety.php'; ?>
        </div>
        <div class="testing-box">
            <?php include '../includes/section-stocks&commodities.php'; ?>
        </div>
        <div class="testing-box">
            <?php include '../includes/section-finalinfo.php'; ?>
        </div>
    </main>
    
    <footer role="contentinfo" class="content-info">
        <?php include '../includes/footer.php'; ?>
    </footer>

    <script src="HeroAnim.js"></script>
</body>

</html>