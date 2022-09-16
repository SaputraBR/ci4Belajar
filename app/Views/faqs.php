<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
    <link rel="icon" href="img/fullBackground-icon.png">
    <title>Belajar</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.min.css" />
    <link rel="stylesheet" type="text/css" href="custom.css" />
</head>

<body class="bg-light">
    <?= $this->include('layout/navbar.php') ?>

    <article class="container shadow-lg col-575 col-sm-10 col-md-8 mt-5 mb-5" style="background-color: #fff;">
        <section class="p-md-5 p-sm-5 p-4">
            <h4><b>Mengapa namanya Belajar.com?</b></h4>
            <p>Yaa karena saya masih tahap belajar</p>
            <br>
            <h4><b>Kapan Belajar.com dibuat?</b></h4>
            <p>Lupa, yang jelas bukan hari ini</p>
            <br>
            <h4><b>Kapan nikah?</b></h4>
            <p>Yaa minta doanya aja</p>    
        </section>
    </article>

    <?= $this->include('layout/footer.php') ?>
</body>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="custom.js"></script>

</html>