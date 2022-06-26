<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li><a class="ai-icon" href="index.php">
                    <i class="flaticon-layout"></i>
                    <span class="nav-text">Home</span>
                </a>
            </li>
            <li><a class="ai-icon" href="profil.php">
                    <i class="flaticon-user"></i>
                    <span class="nav-text">Profil</span>
                </a>
            </li>
            <?php if ($status == "1") { ?>
                <li><a href="nilai.php" class="ai-icon">
                        <i class="flaticon-admin"></i>
                        <span class="nav-text">Cek Nilai</span>
                    </a>
                </li>
            <?php } ?>
            <?php if ($status == "2") { ?>
                <li><a href="datanilai.php" class="ai-icon">
                        <i class="flaticon-admin"></i>
                        <span class="nav-text">Data Nilai</span>
                    </a>
                </li>
            <?php } ?>
            <?php if ($status == "1") { ?>
                <li><a href="absen.php" class="ai-icon">
                        <i class="flaticon-table"></i>
                        <span class="nav-text">Cek Absen</span>
                    </a>
                </li>
            <?php } ?>
            <?php if ($status == "2") { ?>
                <li><a href="isidbabsen.php" class="ai-icon">
                        <i class="flaticon-table"></i>
                        <span class="nav-text">Data Absen</span>
                    </a>
                </li>
            <?php } ?>
            <?php if ($status == "2") { ?>
                <li><a href="tbmahasiswa.php" class="ai-icon">
                        <i class="flaticon-user"></i>
                        <span class="nav-text">Tambah Mahasiswa</span>
                    </a>
                </li>
            <?php } ?>

            <li><a class="ai-icon" href="mahasiswa.php">
                    <i class="flaticon-newsletter"></i>
                    <span class="nav-text">Mahasiswa</span>
                </a>
            </li>
            <li><a class="ai-icon" href="dosen.php">
                    <i class="flaticon-newsletter"></i>
                    <span class="nav-text">Dosen</span>
                </a>
            </li>
        </ul>
    </div>
</div>