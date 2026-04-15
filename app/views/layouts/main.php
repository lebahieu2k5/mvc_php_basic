<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : APP_NAME; ?></title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/style.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <h1><?php echo APP_NAME; ?></h1>
            <nav>
                <a href="<?php echo BASE_URL; ?>">Trang chu</a>
                <a href="<?php echo BASE_URL; ?>index.php?url=home/index">Route test</a>
            </nav>
        </div>
    </header>

    <main class="container">
        <?php echo $content; ?>
    </main>

    <script src="<?php echo BASE_URL; ?>js/script.js"></script>
</body>
</html>
