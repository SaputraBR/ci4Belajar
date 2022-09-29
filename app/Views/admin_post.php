
<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    </head>

    <body>

        <?= $this->include('layout/admin/admin_navbar') ?>
            <?php if(!empty(session()->getFlashdata('berhasil'))){ ?>
                <div class="alert alert-success">
                    <?php echo session()->getFlashdata('berhasil');?>
                </div>
            <?php } ?>
        <div class="container mb-5">
            <table class="table my-5" style="border: solid; border-color: gray;">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Kategori</th>
                        <th>Gambar</th>
                        <th>Status</th>
			            <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($admin as $belajar): ?>
                    <tr>
                        <td><?= $belajar['id'] ?></td>
                        <td>
                            <strong><?= substr($belajar['judul'], 0, 10) ?> . . .</strong><br>
                            <small class="text-muted"><?= $belajar['created_at'] ?></small>
                        </td>
                        <td>
                            <p><?= $belajar['kategori'] ?></p>
                        </td>
                        <td>
			                <img src="<?php echo base_url('img/'.$belajar['gambar'])?>" width="25" height="25" />
                        </td>
                        <td>
                            <?php if($belajar['status'] === 'published'): ?>
                            <small class="text-success"><?= $belajar['status'] ?></small>
                            <?php else: ?>
                            <small class="text-muted"><?= $belajar['status'] ?></small>
                            <?php endif ?>
                        </td>
                        <td>
                            <a href="<?php echo base_url('cms/'.$belajar['id'].'/preview')?>" class="btn btn-sm btn-outline-secondary" target="_blank">Preview</a>
                            <a href="<?php echo base_url('cms/'.$belajar['id'].'/edit')?>" class="btn btn-sm btn-outline-secondary">Edit</a>
                            <a href="#" data-href="<?php echo base_url('cms/'.$belajar['id'].'/delete')?>" onclick="confirmToDelete(this)" class="btn btn-sm btn-outline-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
            <?php echo $pager->links('paginate', 'pagination') ?>

            <div id="confirm-dialog" class="modal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-body">
                        <h2 class="h2">Are you sure?</h2>
                        <p>The data will be deleted and lost forever</p>
                    </div>
                    <div class="modal-footer">
                        <a href="#" role="button" id="delete-button" class="btn btn-danger">Delete</a>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function confirmToDelete(el){
                $("#delete-button").attr("href", el.dataset.href);
                $("#confirm-dialog").modal('show');
            }
        </script>

    </body>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>
