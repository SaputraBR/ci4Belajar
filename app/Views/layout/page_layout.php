<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">
    <head>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
            <link rel="icon" href="/img/fullBackground-icon.png">
            <title>Belajar</title>
            <link rel="stylesheet" type="text/css" href="/css/bootstrap.css"/>
            <link rel="stylesheet" type="text/css" href="/css/bootstrap-grid.css"/>
            <link rel="stylesheet" type="text/css" href="/css/bootstrap-reboot.css"/>
            <link rel="stylesheet" type="text/css" href="/css/custom.css"/>
            <script type="text/javascript" src="/js/jquery.min.js"></script>
        </head>
    </head>

    <body class="bg-joy">
        <?= $this->include('layout/navbar') ?>

        <?= $this->renderSection('content') ?>

        <?= $this->include('layout/footer') ?>

        <?= $this->renderSection('script') ?>

        <script type="text/javascript" src="/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="/js/custom.js"></script>
    </body>
</html>
