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

            <div class="container-fluid">
                <div class="row mt-5">
                    <h4 class="text-left mb-4 ml-4"><b>Perbaharui otakmu yang dangkal itu dengan ensiklopedia</b></h4>
                    <div class="col-sm-12 col-lg-9">
                        <div class="d-md-flex">
                            <div class="col-sm-12 col-md-6 mb-4">
                                <div class="p-4 text-white position-absolute text-left" style="bottom: 0;">
                                    <h6 >
                                        <a href="#" style="color: inherit;"><b>Pujangga Alam</b></a>
                                    </h6>
                                    <h3 class="font-weight-bold" style="font-size: 30px;">
                                        <a href="/post/" style="color: inherit;">Kenangan dalam gelombang</a> 
                                    </h3>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filter-left" viewBox="0 0 16 16">
                                        <path d="M2 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
                                    </svg>
                                    <small><a href="post.php" style="color: inherit;">Baca . . .</a></small>    
                                </div>
                                <img src="img/How To Pray Powerful Prayers (Part 2_3).jpg" alt="" width="100%" height="100%">
                            </div>
        
                            <div class="col-sm-12 col-md-6 mb-4">
                                <div class="p-4 text-white position-absolute text-left" style="bottom: 0;">
                                    <h6 >
                                        <a href="#" style="color: inherit;"><b>Pujangga Alam</b></a>
                                    </h6>
                                    <h3 class="font-weight-bold" style="font-size: 30px;">
                                        <a href="post.php" style="color: inherit;">Kenangan dalam gelombang</a> 
                                    </h3>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filter-left" viewBox="0 0 16 16">
                                        <path d="M2 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
                                    </svg>
                                    <small><a href="post.php" style="color: inherit;">Baca . . .</a></small>    
                                </div>
                                <img src="img/How To Pray Powerful Prayers (Part 2_3).jpg" alt="" width="100%" height="100%">  
                            </div>
                        </div>

                        <?php foreach ($belajar as $ensi) : ?>
                        <div class="mx-2 my-4"> 
                            <div class="card mb-3">
                                <div class="row no-gutters">
                                    <div class="col-4 col-sm-4 col-md-4 m-auto">
                                        <img class="" src="<?php echo base_url('img/'.$ensi['gambar'])?>" alt="" width="100%" height="100%">
                                    </div>
                                    <div class="col-8 col-sm-8 col-md-8 p-3">
                                        <h5>
                                            <p style="color: inherit;"><b><?php echo ($ensi['kategori'])?></b></p>
                                        </h5>
                                        <h4>
                                            <a href="/post/<?= $ensi['slug']?>" style="color: inherit;"><b><?php echo ($ensi['judul'])?></b></a>
                                        </h4>
                                        <p><?php echo substr($ensi['content'], 0, 100)?></p>
                                        <small class="text-muted"><?php echo ($ensi['created_at'])?></small>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <?php endforeach ?>
                    </div>

                    <aside class="col-sm-12 col-lg-3 mb-5">
                        <div class="card rounded-lg shadow sticky-top" style="top: 12vh; z-index: 0;">
                            <div class="card-body">
                                <h5 class="h5">Billboard</h5>
                            </div>
                            <div class="list-group list-group-flush p-0 pb-1">
                                <a class="list-group-item list-group-item-action flex-column align-items-start" href="#">
                                    <div class="media">
                                        <div class="media-body">
                                            <h6 class="h6 mt-0 mb-1 font-weight-bold">Obat kuat manjur untuk biawak</h6>
                                            <small class="text-secondary align-middle">7 Jul 2013</small>
                                        </div>
                                    <img src="img/iconBlack.png" width="50" height="50" class="rounded-lg ml-2"/>
                                    </div>
                                </a>
                            </div>
                            <div class="list-group list-group-flush p-0 pb-1">
                                <a class="list-group-item list-group-item-action flex-column align-items-start" href="#">
                                    <div class="media">
                                        <div class="media-body">
                                            <h6 class="h6 mt-0 mb-1 font-weight-bold">Obat kuat manjur untuk biawak</h6>
                                            <small class="text-secondary align-middle">7 Jul 2013</small>
                                        </div>
                                    <img src="img/iconBlack.png" width="50" height="50" class="rounded-lg ml-2"/>
                                    </div>
                                </a>                                
                            </div>
                            <div class="list-group list-group-flush p-0 pb-1">
                                <a class="list-group-item list-group-item-action flex-column align-items-start" href="#">
                                    <div class="media">
                                        <div class="media-body">
                                            <h6 class="h6 mt-0 mb-1 font-weight-bold">Obat kuat manjur untuk biawak</h6>
                                            <small class="text-secondary align-middle">7 Jul 2013</small>
                                        </div>
                                    <img src="img/iconBlack.png" width="50" height="50" class="rounded-lg ml-2"/>                                        
                                    </div>
                                </a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>

        </main>

        <?= $this->include('layout/footer.php') ?>

        <script type="text/javascript" src="/js/jquery.min.js"></script>
        <script type="text/javascript" src="/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="/js/custom.js"></script>

    </body>
</html>