<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Profil</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)"><?= $namap ?></a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="profile card card-body px-3 pt-3 pb-0">
                    <div class="profile-head">
                        <!-- Style Sampul Start-->
                        <style>
                            .photo-content {
                                position: relative;
                            }

                            .photo-content .cover-photo {
                                background: url(./<?php echo $potosampulp ?>);
                                background-size: cover;
                                background-position: center;
                                min-height: 250px;
                                width: 100%;
                            }
                        </style>
                        <!-- Style Sampul End-->
                        <div class="photo-content">
                            <div class="cover-photo rounded"></div>
                        </div>
                        <div class="profile-info">
                            <div class="profile-photo">
                                <img src="<?php echo $potoprofilp ?>" class="img-fluid rounded-circle" alt="">
                            </div>
                            <div class="profile-details">
                                <div class="profile-name px-3 pt-2">
                                    <h4 class="text-primary mb-0"><?php echo $namap ?></h4>
                                    <p><?php echo $role ?></p>
                                </div>
                                <div class="profile-email px-2 pt-2">
                                    <h4 class="text-muted mb-0"><a><?php echo $emailp ?></a></h4>
                                    <p>Email</p>
                                </div>
                                <div class="dropdown ms-auto">
                                    <a href="#" class="btn btn-primary light sharp" data-bs-toggle="dropdown" aria-expanded="true"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                            </g>
                                        </svg></a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li class="dropdown-item"><i class="fa fa-user-circle text-primary me-2"></i> Ubah Foto Profil</li>
                                        <li class="dropdown-item"><i class="fa fa-image text-primary me-2"></i> Ubah Foto Sampul</li>
                                        <li class="dropdown-item"><i class="fa fa-ban text-primary me-2"></i> Logout</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <?php
            if ($status == "1") {
            ?>
                <div class="col-xl-4">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="profile-statistics">
                                        <div class="text-center">
                                            <div class="row">
                                                <div class="col">
                                                    <?php
                                                    $absen = "SELECT * FROM absen WHERE nim='$_GET[id]'";
                                                    $hasil = mysqli_query($con, $absen);
                                                    $totalhadir = mysqli_num_rows($hasil);
                                                    // Mengambil Data Status Hadir
                                                    $kehadiran = "SELECT * FROM absen WHERE nim='$_GET[id]' and kehadiran='Hadir'";
                                                    $hasilhadir = mysqli_query($con, $kehadiran);
                                                    $totalhadir = mysqli_num_rows($hasilhadir);
                                                    // Mengambil Data Status Alpha
                                                    $alpha = "SELECT * FROM absen WHERE nim='$_GET[id]' and kehadiran='Alpha'";
                                                    $hasilalpha = mysqli_query($con, $alpha);
                                                    $totalalpha = mysqli_num_rows($hasilalpha);
                                                    // Mengambil Data Status Sakit
                                                    $sakit = "SELECT * FROM absen WHERE nim='$_GET[id]' and kehadiran='Sakit' or kehadiran='Izin'";
                                                    $hasilsakit = mysqli_query($con, $sakit);
                                                    $totalsakit = mysqli_num_rows($hasilsakit);
                                                    ?>
                                                    <h3 class="m-b-0"><?php echo $totalhadir; ?></h3><span>Hadir</span>
                                                </div>
                                                <div class="col">
                                                    <h3 class="m-b-0"><?php echo $totalsakit; ?></h3><span>Sakit/Izin</span>
                                                </div>
                                                <div class="col">
                                                    <h3 class="m-b-0"><?php echo $totalalpha; ?></h3><span>Alpha</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <div class="profile-tab">
                            <div class="custom-tab-1">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a href="#about-me" data-bs-toggle="tab" class="nav-link active show">Biodata</a>
                                    </li>
                                    <?php if ($_SESSION['kode_login'] == $_GET['id']) { ?>
                                        <li class="nav-item"><a href="#profile-settings" data-bs-toggle="tab" class="nav-link">Pengaturan Akun</a>
                                        <?php } ?>
                                        </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="about-me" class="tab-pane fade active show">
                                        <!-- Modal -->
                                        <div class="profile-about-me">
                                            <div class="pt-4 border-bottom-1 pb-3">
                                                <h4 class="text-primary">Biodata</h4>
                                                <p class="mb-2"><?php echo $biop; ?></p>
                                            </div>
                                            <?php if (isset($_GET['pesan'])) :
                                                if ($_GET['pesan'] == "Gagal") : ?>
                                                    <div class="alert alert-danger alert-dismissible fade show">
                                                        <svg viewbox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2">
                                                            <polyline points="9 11 12 14 22 4"></polyline>
                                                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                                        </svg>
                                                        <strong>Gagal!</strong> Data belum diubah.
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                                        </button>
                                                    </div>
                                                <?php endif; ?>
                                                <?php if ($_GET['pesan'] == "Sukses") : ?>
                                                    <div class="alert alert-success alert-dismissible fade show">
                                                        <svg viewbox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2">
                                                            <polyline points="9 11 12 14 22 4"></polyline>
                                                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                                        </svg>
                                                        <strong>Sukses!</strong> Data telah diubah.
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                                        </button>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <?php if ($_SESSION['kode_login'] == $_GET['id']) { ?>
                                        <div id="profile-settings" class="tab-pane fade">
                                            <div class="pt-3">
                                                <div class="settings-form">
                                                    <h4 class="text-primary">Account Setting</h4>
                                                    <form method="post" action="profil.php?id=<?php echo $_SESSION['kode_login'] ?>">
                                                        <div class="row">
                                                            <div class="mb-3 col-md-6">
                                                                <label class="form-label">Email</label>
                                                                <input name="email" type="email" value="<?php echo $emailp ?>" class="form-control"></input>
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label class="form-label">Password</label>
                                                                <input name="password" type="password" value="" class="form-control"></input>
                                                            </div>
                                                            <div class="mb-3 col-md-12">
                                                                <label class="form-label">Biodata</label>
                                                                <textarea name="biodata" type="password" value="Hello World" class="form-control"><?php echo $bio ?></textarea>
                                                            </div>
                                                        </div>
                                                        <button class="btn btn-block btn-primary" type="button">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>