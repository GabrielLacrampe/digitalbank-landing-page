<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../includes/head.php'; ?>
</head>

<body>   
    <header>
        <?php include '../includes/header.php'; ?>
    </header>

    <main>
        <?php include '../includes/section-hero.php'; 
        include '../includes/section-awards&references.php';
        include '../includes/section-cards.php'; 
        include '../includes/section-savings.php'; 
        include '../includes/section-safety.php';
        include '../includes/section-stokscommodities.php';
        include '../includes/section-finalinfo.php'; ?>
    </main>
    
    <footer role="contentinfo" class="content-info">
        <?php include '../includes/section-plans.php'; 
        include '../includes/section-links.php'; ?>
    </footer>

    <script src="HeroAnim.js"></script>
    <script src="sections.js"></script>
</body>

</html>