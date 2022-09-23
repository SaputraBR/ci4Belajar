<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">  

    </head>

    <body style="background-color: #B5C7CC;">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow" >
            <div class="container">
                <a class="navbar-brand" style="text-decoration: none;" href="<?php echo base_url('cms') ?>">Admin</a>
            </div>
        </nav>

        <section class="container shadow-lg col-575 col-sm-8 col-md-6 mt-5 mb-5 bg-light">
            <?php if(!empty(session()->getFlashdata('berhasil'))){ ?>
                <div class="alert alert-success">
                    <?php echo session()->getFlashdata('berhasil');?>
                </div>
            <?php } ?>
            <form method="post" enctype="multipart/form-data" class="p-md-5 p-sm-5 p-4">
                <h3>Register Form</h3>
                <p><small>Isikan data user yang akan didaftarkan</small></p>
                <hr/>
                <div class="mb-3 form-group">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" aria-describedby="username" required>
                    <div id="username" class="form-text"><i>*Minimal 4 karakter</i></div>
                </div>
                <div class="mb-3 form-group">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group-append">
                        <input type="password" class="form-control" name="password" id="password" required>
                        <button type="button" class="input-group-text" id="eyefill" onclick="show()" >
                            <i class="bi bi-eye-slash-fill"></i>
                        </button>
                        <button type="button" class="input-group-text" id="eye" onclick="show()" hidden> 
                            <i class="bi bi-eye-fill"></i>
                        </button>
                    </div>
                    <div id="password" class="form-text"><i>*Minimal 4 karakter</i></div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
                
            </form>
        </section>
    
    </body>
    <script>

        function show(){
            var show = document.getElementById('eyefill');
            var hide = document.getElementById('eye');
            var pass = document.getElementById('password');

            if(pass.type === 'password'){
                pass.type = 'text';
                hide.hidden = false;
                show.hidden = true;
            } else {
                pass.type = 'password'
                hide.hidden = true;
                show.hidden = false;
            }
        }

    </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>
