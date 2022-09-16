<!DOCTYPE html>
<html>
    <head>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
            <link rel="icon" href="img/fullBackground-icon.png">
            <title>Belajar</title>
            <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css"/>
            <link rel="stylesheet" type="text/css" href="/css/bootstrap-grid.min.css"/>
            <link rel="stylesheet" type="text/css" href="/css/bootstrap-reboot.min.css"/>
            <link rel="stylesheet" type="text/css" href="/css/custom.css"/>
        </head>
    </head>

    <body class="bg-light">
        <?= $this->include('layout/navbar.php') ?>

        <main>
            <header class="jumbotron bg-ensi" style="background-image: url('../img/mount.jpg');">
                <div class="container">
                    <h1 class="title-header" style="background-image: url('../img/Underwater.jpg')">ENSIKLOPEDIA</h1>
                </div>
            </header>

            <?= $this->include('layout/post_ensi.php') ?>
        </main>

        <?= $this->include('layout/footer.php') ?>

        <script type="text/javascript" src="/js/jquery.min.js"></script>
        <script type="text/javascript" src="/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="/js/custom.js"></script>

    </body>
</html>