<!DOCTYPE html>
<html>
    <head>
		<link rel="icon" href="/img/iconWhite.png">
        <title>Admin</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
    </head>

    <body>
        <?= $this->include('layout/admin/admin_navbar') ?>

        <div class="container mt-5">
            <form action="<?php echo base_url('cms/new') ?>" method="post" enctype="multipart/form-data" id="text-editor">
                <div class="form-group">
                    <label for="judul">Title</label>
                    <input type="text" name="judul" class="form-control" placeholder="Judul konten" required>
                </div>
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <input type="text" name="kategori" class="form-control" placeholder="kategori" required>
                </div>
                <div class="form-group" >
                    <textarea name="content" id="editor1" class="form-control" cols="30" rows="10" placeholder="Write a shit here"></textarea>
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input type="file" id="gambar" name="gambar" class="form-control;">
                </div>
                <div class="form-group">
                    <button type="submit" name="status" value="published" class="btn btn-primary">Publish</button>
                    <button type="submit" name="status" value="draft" class="btn btn-secondary">Save to Draft</button>
                </div>
            </form>
        </div>

                <script>
                        CKEDITOR.replace( 'editor1' );
                </script>

        
    </body>
    <script src="https://cdn.ckeditor.com/[version.number]/[distribution]/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>