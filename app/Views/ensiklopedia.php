<?= $this->extend('layout/page_layout') ?>
    <?= $this->section('content') ?>
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
                        <?php foreach (array_slice($belajar, 0, 2) as $ensi) :?>
                                <div class="col-sm-12 col-md-6 mb-4">
                                    <div class="p-4 text-white position-absolute text-left" style="bottom: 0;">
                                        <h6 >
                                            <a href="#" style="color: inherit;"><b><?php echo ($ensi['kategori'])?></b></a>
                                        </h6>
                                        <h3 class="font-weight-bold" style="font-size: 30px;">
                                            <a href="/post/<?= $ensi['slug']?>" style="color: inherit;"><?php echo ($ensi['judul'])?></a> 
                                        </h3>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filter-left" viewBox="0 0 16 16">
                                            <path d="M2 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
                                        </svg>
                                        <small><a href="/post/<?= $ensi['slug']?>" style="color: inherit;">Baca . . .</a></small>    
                                    </div>
                                    <img src="<?php echo base_url('img/'.$ensi['gambar'])?>" alt="" width="100%" height="100%">
                                </div>
                        <?php endforeach ?>
                        </div>

                        <?php foreach (array_slice($belajar, 2, 10) as $ensi) : ?>
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
                                        <p><?php echo substr($ensi['content'], 0, 150)?>. . .</p>
                                        <small class="text-muted"><?php echo substr($ensi['created_at'], 0, 10)?></small>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <?php endforeach ?>
                        <?php echo $pager->links('pagin', 'pagination') ?>
                    </div>

                    <aside class="col-sm-12 col-lg-3 mb-4">

                    </aside>
                </div>
            </div>

        </main>

        <?= $this->endSection() ?>