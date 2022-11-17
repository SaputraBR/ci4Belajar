    <?= $this->extend('layout/page_layout') ?>

    <?= $this->section('content') ?>
        <article class="container shadow-lg col-575 col-sm-10 col-md-8 mt-5 mb-5" style="background-color: #fff; min-height: 60vh">
            <div class="d-inline-block mt-5 px-5" style="width: 100%;">
                <form action="" method="GET" class="form-group">
                    <div class="input-group">
                        <input class="form-control shadow mr-3" type="search" name="search" placeholder="masukan kata kunci">
                            
                        <button class="btn shadow" style="background: #37e8ff ;" type="submit">
                            <svg class="bi bi-search" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg> 
                        </button> 
                    </div>
                </form>
            </div>

            <section class="container my-5 pb-5 px-5">
                <?php foreach($belajar as $belajar) :?>
                        <div class="mb-3 border-bottom">
                            <h4><a href="/post/<?= $belajar['slug']?>" style="color: inherit;"> 
                                <b><?= substr($belajar['judul'], 0, 15)?></b>
                            </a></h4>
                            <p><?= substr($belajar['content'], 0, 40)?></p>
                        </div>
                <?php endforeach; ?>
                <?php echo $pager->links('pagin', 'pagination') ?>
            </section>
        </article>
    <?= $this->endSection() ?>
