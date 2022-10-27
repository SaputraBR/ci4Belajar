<!DOCTYPE html>
<html lang="en">
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

    <body class="bg-light">
        <?php echo $this->include("layout/navbar"); ?>
        <?php if(!empty(session()->getFlashdata('berhasil'))){ ?>
                <div class="alert alert-success">
                    <?php echo session()->getFlashdata('berhasil');?>
                </div>
            <?php } ?>

        <article class="container d-flex shadow-lg col-575 col-sm-10 col-md-8 mt-5 mb-5 justify-content-center" style="background-color: #fff;">
            <section class="col-sm-12 col-lg-10 p-md-5 p-sm-5 p-4" >
                <header class="mb-4">
                    <h2 class="h2">Hubungi Kami</h2>
                    <p>Anda bisa menghubungi kami dengan mengisi form berikut</p>    
                </header>

                <form action="<?= base_url('/contact/pesan')?>" method="post" class="form">
                    <div class="form-group" hidden>
                        <label for="tipe">Tipe</label>
                        <input type="text" id="tipe" name="tipe" value="pesan_user" class="form-control form-control2">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" id="nama" name="nama" class="form-control form-control2" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control form-control2" required>
                    </div>
                    <div class="form-group">
                        <label for="notelp">No Telepon</label>
                        <input type="text" id="notelp" name="notelp" class="form-control form-control2">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea type="text" id="message" name="message" class="form-control form-control2" id="" cols="30" rows="6" required></textarea>
                    </div>                             
                    <div class="form-group">
                        <input type="submit" value="Kirim" class="btn btn-primary w-100">
                    </div>
                </form>

                <footer>
                    <br><h5 class="h5">Atau anda dapat menghubungi kami melalui</h5>
                    <p>Email : ahmadbungsu4590@gmail.com <br>
                    No telepon : +62857-4398-2850</p> 
                </footer>
            </section>
        </article>

        
        <?= $this->include("layout/footer") ?>
    
        <script type="text/javascript" src="/js/jquery.min.js"></script>
        <script type="text/javascript" src="/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="/js/custom.js"></script>

    </body>
</html>