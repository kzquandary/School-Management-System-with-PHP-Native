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
        <?php if($status == "1"){ ?>
            <li><a class="has-arrow ai-icon" href="javascript:void()">
                    <i class="flaticon-plugin"></i>
                    <span class="nav-text">Kelas Saya</span>
                </a>            
                <ul aria-expanded="false">
                <?php
                 $query = mysqli_query($con, "SELECT * FROM anggota_kelas WHERE nim = '$kode_user'");
                 while($data = mysqli_fetch_assoc($query)){

                    echo'<li><a href="page-error-400.html"><font color="cyan"><strong>'. $data['pelajaran'] .'</strong></font></a></li>';
                }
                ?>
                </ul>
            </li>
        <?php } ?>
            <?php if($status == "1"){ ?>
            <li><a href="nilai.php" class="ai-icon">
                    <i class="flaticon-admin"></i>
                    <span class="nav-text">Cek Nilai</span>
                </a>
            </li>
            <?php } ?>
            <?php if($status == "2"){ ?>
            <li><a href="nilai.php" class="ai-icon">
                    <i class="flaticon-admin"></i>
                    <span class="nav-text">Data Nilai</span>
                </a>
            </li>
            <?php } ?>
            <?php if($status == "1"){ ?>
            <li><a class="ai-icon">
                    <i class="flaticon-table"></i>
                    <span class="nav-text">Cek Absen</span>
                </a>
            </li>
            <?php } ?>
            <?php if($status == "2"){ ?>
            <li><a class="ai-icon">
                    <i class="flaticon-table"></i>
                    <span class="nav-text">Data Absen</span>
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