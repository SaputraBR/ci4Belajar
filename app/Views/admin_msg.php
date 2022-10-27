    <head>
		<link rel="icon" href="/img/iconWhite.png">
        <title>Admin</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    </head>

    <?php echo $this->include('layout/admin/admin_navbar'); ?>

    <body>
        <section class="container">
            <table class="table my-5">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>
                            Nama
                        </th>
                        <th>Pesan</th>
                        <th>Waktu</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php foreach($user as $d) : ?>
                <tbody>
                    <td><?= $d['id_comment'] ?></td>
                    <td>
                        <b><?= $d['nama'] ?></b><br>
                        <small><?= $d['email'] ?></small>
                    </td>
                    <td><?= substr($d['message'], 0, 30) ?></td>
                    <td><?= $d['dibuat'] ?></td>
                    <td>
                    <a href="<?= base_url('/cms/'.$d['id_comment'].'/detail')?>"><button class="btn btn-sm btn-outline-secondary">Detail</button></a>
                    <button href="#" data-href="<?= base_url('cms/'.$d['id_comment'].'/hapus')?>" onclick="confirmToDelete(this)" class="btn btn-sm btn-outline-danger">Delete</button>
                    </td>
                </tbody>
                <?php endforeach; ?>
            </table>
        </section>
        <div id="confirm-dialog" class="modal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-body">
                        <h2 class="h2">Beneran mau dihapus?</h2>
                        <p>Datanya akan hilang permanen!</p>
                    </div>
                    <div class="modal-footer">
                        <a href="#" role="button" id="delete-button" class="btn btn-danger">Delete</a>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
    <script>
            function confirmToDelete(el){
                $("#delete-button").attr("href", el.dataset.href);
                $("#confirm-dialog").modal('show');
            }
        </script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
