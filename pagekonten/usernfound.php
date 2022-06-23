        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Profil</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">User Not Found</a></li>
                    </ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-xl-6 col-xxl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="alert alert-danger solid alert-dismissible fade show">
                                    <svg viewbox="0 0 24 24" width="24 " height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2">
                                        <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                                        <line x1="15" y1="9" x2="9" y2="15"></line>
                                        <line x1="9" y1="9" x2="15" y2="15"></line>
                                    </svg>
                                    <strong>Error!</strong> User <?php echo $_GET['id'] ?> Tidak Terdaftar.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                    </button>
                                </div>
                                <a class="btn btn-block btn-primary" href="index.php">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>