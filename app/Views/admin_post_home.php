<?= $this->extends('admin_post') ?>
    <?= $this->section('content') ?>
        <div class="container">
            <table class="table my-5" style="border: solid; border-color: gray;">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Gambar</th>
                        <th>Status</th>
			            <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($belajar as $belajar): ?>
                    <tr>
                        <td><?= $belajar['id'] ?></td>
                        <td>
                            <strong><?= $belajar['judul'] ?></strong><br>
                            <small class="text-muted"><?= $belajar['created_at'] ?></small>
                        </td>
                        <td>
			                <img src="" width="25" height="25" />
                        </td>
                        <td>
                            <?php if($news['status'] === 'published'): ?>
                            <small class="text-success"><?= $news['status'] ?></small>
                            <?php else: ?>
                            <small class="text-muted"><?= $news['status'] ?></small>
                            <?php endif ?>
                        </td>
                        <td>
                            <a href="#" class="btn btn-sm btn-outline-secondary" target="_blank">Preview</a>
                            <a href="new.php" class="btn btn-sm btn-outline-secondary">Edit</a>
                            <a href="#" data-href="" onclick="" class="btn btn-sm btn-outline-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
        </div>

        <script>
            function confirmToDelete(el){
                $("#delete-button").attr("href", el.dataset.href);
                $("#confirm-dialog").modal('show');
            }
        </script>

    <?= $this->endSection() ?>

