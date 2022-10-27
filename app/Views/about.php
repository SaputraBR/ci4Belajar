<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
    <link rel="icon" href="img/fullBackground-icon.png">
    <title>Belajar</title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-grid.min.css" />
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-reboot.min.css" />
    <link rel="stylesheet" type="text/css" href="/css/custom.css" />
</head>

<body class="bg-light">
    <?= $this->include('layout/navbar.php') ?>

    <article class="container shadow-lg col-575 col-sm-10 col-md-8 mt-5 mb-5" style="background-color: #fff;">
        <section class="p-md-5 p-sm-5 p-4">
            <h4><b>Apa itu Belajar.com?</b></h4>
            <p>Belajar.com adalah situs pertama saya untuk tujuan mencerdaskan kehidupan bangsa</p>
            <br>
            <h4><b>Framework</b></h4>
            <p>Disini saya menggunakan framework bootstrap karena menurut saya mudah dipahami dan tidak rumit untuk orang awam seperti saya</p>
            <br>
            <h4><b>Bahasa program</b></h4>
            <p>Sebagian besar saya menggunakan html dan untuk mengatur tampilan saya menggunakan css. Saya juga memberi sedikit efek dengan javascript</p>
        </section>
    </article>

    <?= $this->include('layout/footer.php') ?>
</body>

    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="/js/custom.js"></script>

</html>