<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
        <link rel="icon" href="/img/fullBackground-icon.png">
        <title>Belajar</title>
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="/css/bootstrap-grid.css"/>
        <link rel="stylesheet" type="text/css" href="/css/bootstrap-reboot.css"/>
        <link rel="stylesheet" type="text/css" href="/css/custom.css"/>
    </head>

    <body class="bg-joy">

        <?= $this->include('layout/navbar') ?>

        <div class="container my-4 my-sm-5 my-md-5">
            <div class="row">
                <div class="col-sm-12 col-lg-8">
                    <div class="d-sm-none d-lg-block" style="position: absolute;left: -2.5rem;top: 0;height: 100%;">
                        <div class="sticky-top text-center" style="top:25vh">
                            <nav>
                                <a class="d-block mb-3" id="sekrol" role="button" title="kembali ke atas" onclick="sekrolTop()"> 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
                                    </svg>
                                </a>
                                <a class="d-block" href="#komentar" title="komentar" id="chat"> 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-chat-quote-fill" viewBox="0 0 16 16">
                                        <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM7.194 6.766a1.688 1.688 0 0 0-.227-.272 1.467 1.467 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 5.734 6C4.776 6 4 6.746 4 7.667c0 .92.776 1.666 1.734 1.666.343 0 .662-.095.931-.26-.137.389-.39.804-.81 1.22a.405.405 0 0 0 .011.59c.173.16.447.155.614-.01 1.334-1.329 1.37-2.758.941-3.706a2.461 2.461 0 0 0-.227-.4zM11 9.073c-.136.389-.39.804-.81 1.22a.405.405 0 0 0 .012.59c.172.16.446.155.613-.01 1.334-1.329 1.37-2.758.942-3.706a2.466 2.466 0 0 0-.228-.4 1.686 1.686 0 0 0-.227-.273 1.466 1.466 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 10.07 6c-.957 0-1.734.746-1.734 1.667 0 .92.777 1.666 1.734 1.666.343 0 .662-.095.931-.26z"/>
                                    </svg>
                                </a>
                            </nav>
                        </div>
                    </div>

                    <article class="card shadow rounded-lg">
                        <div class="card-body p-sm-2 p-md-4">
                            <div class="p-4 p-sm-4 p-md-5">
                                <header class="d-inline-flex text-center mb-4">
                                    <small class="mr-2"><?= $belajar['author'] ?> · <?= date("d M o", strtotime($belajar['created_at'])); ?></small>
                                </header>
                                <h1 class="h1 font-weight-bold mb-3"><?= $belajar['judul'] ?></h1>
                                <div class="d-inline-flex mb-4">
                                    <a href="#" class="px-2 py-1 mr-1 text-white bg-primary" style="text-decoration: none; border-radius: 0.4rem;"><?= $belajar['kategori'] ?></a>
                                </div>
                                <div>
                                    <picture>
                                        <source media="(min-width: 1200px)" srcset="<?= base_url('img/'.$belajar['gambar'])?>" type="image/png" width="100%">
                                        <source media="(min-width: 768px)" srcset="<?= base_url('img/'.$belajar['gambar'])?>" type="image/png" width="100%">
                                        <source media="(min-width: 576px)" srcset="<?= base_url('img/'.$belajar['gambar'])?>" type="image/png" width="100%">
                                        <source media="(max-width: 575px)" srcset="<?= base_url('img/'.$belajar['gambar'])?>" type="image/png" width="100%">
                                        <img class="mb-4" src="<?= base_url('img/'.$belajar['gambar'])?>" width="" height="" alt="">
                                    </picture>
                                    <div class="">
                                        <?= $belajar['content'] ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>

                    <div id="comment_section">
                        <section class="card rounded-lg shadow mt-5 mb-1" id="comment_wrapper">
                            <div class="card-body" id="comment_form_wrapper">
                                <div id="comment_resp"></div>
                                <div class="mb-4">
                                    <h3 class="h3">Tulis Komentar atau Pertanyaan</h3>
                                    <small>Berikan pendapat atau masukan anda untuk artikel ini</small>    
                                </div>
                                <form action="" method="post" class="form embuh mt-2" id="comment_form" name="comment_form">
                                    <a href="javascript:void(0);" id="cancel-comment-reply-link" style="float: right"><b>Cancel</b></a>
                                    <div class="form-group" hidden>
                                        <label for="tipe">Tipe</label>
                                        <input type="text" id="tipe" name="tipe" value="komentar" class="form-control form-control2 embuh">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" id="nama" name="nama" class="form-control form-control2 embuh" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" id="email" name="email" class="form-control form-control2 embuh" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea type="text" id="message" name="message" class="form-control form-control2 embuh" cols="30" rows="6"></textarea>
                                    </div>
                                    <div class="form-group" hidden>
                                        <input type='hidden' name='id_post' value="<?= $belajar['id_post'] ?>" id='id_post'/>                             
                                        <input type='hidden' name='id_main' value="" id='id_main'/>
                                        <input type="hidden" name="depth_level" id="depth_level" value=""/>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="komentar" id="comment_submit" name="comment_submit" class="btn btn-primary w-100">
                                    </div>
                                </form>
                            </div>
                        </section>

                        <section class="container rounded-lg shadow p-5 mt-3 mb-5 bg-white" id="komentar">
                            <?= $user ?>
                        </section>
                    </div>
                </div>
                
                <aside class="col-sm-12 col-lg-4 mb-5">
                    <div class="card rounded-lg shadow sticky-top" style="top: 5rem; z-index: -1"">
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

        <div id="overlay">
            <div class="cv-spinner">
                <span class="spinner"></span>
            </div>
        </div>

        <?= $this->include('layout/footer') ?>

    </body>
        <script type="text/javascript" src="/js/jquery.min.js"></script>
        <script type="text/javascript" src="/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="/js/custom.js"></script>
        <script type="text/javascript" src="/js/comment_post.js"></script>
        <script src="/js/jquery-blockUI.js"></script>


</html>