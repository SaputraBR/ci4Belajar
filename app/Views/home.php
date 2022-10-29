<!DOCTYPE html>
<html>
    <head>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
            <link rel="icon" href="img/fullBackground-icon.png">
            <title>Belajar</title>
            <link rel="stylesheet" type="text/css" href="/css/bootstrap.css"/>
            <link rel="stylesheet" type="text/css" href="/css/bootstrap-grid.css"/>
            <link rel="stylesheet" type="text/css" href="/css/bootstrap-reboot.css"/>
            <link rel="stylesheet" type="text/css" href="/css/custom.css"/>
        </head>
    </head>

    <body class="bg-joy">
        <?= $this->include('layout/navbar') ?>
        
        <header>
            <div class="jumbotron bg-sky">
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-md-6 px-lg-5 text-md-left text-center">
                            <h1 class="text-white">BUDAYAKAN KOPI PASTE</h1>
                            <p class="text-white">cari ilmu ngapain susah-susah</p>
                        </div>
                        <div class="col-md-6 px-lg-5 d-none d-md-flex">
                            <img class="rounded ml-auto" src="img/fullBelajar.png" width="250" height="250">
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="container mt-5">
            <div class="d-block">
                <div class="font-weight-bold" style="color: #007edf;">TERBARU</div>
                <h4 class="h4 font-weight-bolder mb-3">Temukan materi terbaru untuk Belajar</h4>
            </div>
            <div class="row mb-5">
                <?php foreach ($belajar as $index) : ?>
                <div class="col-md-6 card-group col-lg-4 p-2">
                    <div class="card rounded-one shadow">
                        <a href="/post/<?= $index['slug']?>" class="card-panel" id="panelCard">
                            <img class="rounded-lg d-flex" style="margin: auto; object-fit: contain; object-position: center;" src="<?php echo base_url('img/'.$index['gambar'])?>" width="246" height="160">
                        </a>
                        <div class="card-body">
                            <h6><?= $index['kategori']?></h6>
                            <h5 class="card-title h5 font-weight-bold"><a style="color: inherit; text-decoration: none;" href="/post/<?= $index['slug']?>"><?= substr($index['judul'], 0, 26)?></a></h5>
                            <p class="card-text"><?= substr ($index['content'], 0, 77)?></p>
                            <p class="d-lg-block d-sm-none pb-0"><small class="text-muted"><?= substr($index['created_at'], 0, 10)?></small></p>
                        </div>
                    </div>
                </div>

                <?php endforeach ?>
                <?php echo $pager->links('pagin', 'pagination') ?>
            </div>

                <!--function custom.js & custom.css-->
                <div class="d-block" style="position: absolute;right: 1vw;top: 0;height: 100%;">
                    <div style="position: fixed; bottom: 40px; right: 50px; z-index: 10;" id="rollBack" hidden>
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" id="ngeroll" width="50" height="50" fill="currentColor" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16" id="biUp">
                                <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <?= $this->include('layout/footer') ?>

        <script type="text/javascript" src="/js/jquery.min.js"></script>
        <script type="text/javascript" src="/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="/js/custom.js"></script>

        <script>
        window.onscroll = function() {backTop()}

        function backTop() {    
            var buttonTop = document.getElementById('rollBack')

            if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            buttonTop.hidden = false;
            } else {
            buttonTop.hidden = true;
            };
        };

        var rollBack = document.getElementById('rollBack');

        rollBack.addEventListener('click', (e) => {
        e.preventDefault();
        $('html, body').animate({scrollTop:0})
        });
        
        </script>
    </body>
</html>
