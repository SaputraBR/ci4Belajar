        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow">
            <div class="container">
                <a class="navbar-brand" style="text-decoration: none;" href="<?php echo base_url('cms') ?>">Admin</a>
                <div class="collapse navbar-collapse justify-content-between" id="navCollapse">
                    <div class="navbar-nav">
                        <div class="nav-item">
                            <a class="nav-link navbar-text" href="<?php echo base_url('cms/new')?>">New Post</a>
                        </div>
                    </div>
                    <div class="navbar-nav">
                        <div class="nav-item">
                        <a class="" href="/register">
                                <button type="button" class="btn btn-light">Register</button>
                            </a>
                            <a class="" href="admin_logout.php">
                                <button type="button" class="btn btn-danger">Logout</button>
                            </a>
                        </div>
                    </div>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navCollapse" aria-controls="navCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>