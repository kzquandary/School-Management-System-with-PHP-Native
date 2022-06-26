<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Form Label Size</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="" method="post">
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-lg">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="nama" class="form-control form-control-lg" placeholder="Masukan Nama" required />
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-lg">NIM</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="nim" class="form-control form-control-lg" placeholder="Masukan NIM" required />
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-lg">Tanggal Lahir</label>
                                    <div class="col-sm-10">
                                        <input type="date" name="tanggal" class="form-control form-control-lg" placeholder="Masukan NIM" required />
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-lg">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" name="email" class="form-control form-control-lg" placeholder="Masukan Email" required />
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-lg">Gender</label>
                                    <div class="col-sm-10">
                                        <select class="form-control form-control-lg" name="gender">
                                            <option value="0" class="form-control">Pilih Gender</option>
                                            <option value="1" class="form-control">Perempuan</option>
                                            <option value="2" class="form-control">Laki-laki</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-lg">Fakultas</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="fakultas" class="form-control form-control-lg" placeholder="Masukan Fakultas" required />
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-lg">Jurusan</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="jurusan" class="form-control form-control-lg" placeholder="Masukan Jurusan" required />
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-lg">Kelas</label>
                                    <div class="col-sm-10">
                                        <select class="form-control form-control-lg" name="kelas">
                                            <option value="0" class="form-control">Pilih Kelas</option>
                                            <option value="A" class="form-control">Kelas A</option>
                                            <option value="B" class="form-control">Kelas B</option>
                                            <option value="C" class="form-control">Kelas C</option>
                                            <option value="D" class="form-control">Kelas D</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-lg">Semester</label>
                                    <div class="col-sm-10">
                                        <select class="form-control form-control-lg" name="semester">
                                            <option value="0" class="form-control">Pilih Semester</option>
                                            <option value="1" class="form-control">Semester 1</option>
                                            <option value="2" class="form-control">Semester 2</option>
                                            <option value="3" class="form-control">Semester 3</option>
                                            <option value="4" class="form-control">Semester 4</option>
                                            <option value="5" class="form-control">Semester 5</option>
                                            <option value="6" class="form-control">Semester 6</option>
                                            <option value="7" class="form-control">Semester 7</option>
                                            <option value="8" class="form-control">Semester 8</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-lg">Dosen Wali</label>
                                    <div class="col-sm-10">
                                        <select class="form-control form-control-lg" name="wali">
                                            <option value="0" class="form-control">Pilih Wali</option>
                                            <?php
                                            $wali = mysqli_query($con, "SELECT * FROM dosen");
                                            foreach ($wali as $keywali) {
                                            ?>
                                                <option value="<?= $keywali['kode_dosen'] ?>" class="form-control"><?= $keywali['nama'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <button type="submit" name="submit" class="btn btn-primary form-control">Submit</button>
                            </form>
                        </div>
                        <hr>
                        <?php if (isset($_POST['submit'])) {
                            $nama = $_POST['nama'];
                            $nim = $_POST['nim'];
                            $email = $_POST['email'];
                            $tanggal = $_POST['tanggal'];
                            $gender = $_POST['gender'];
                            if ($gender == 1) {
                                $gender = "Perempuan";
                            } else if ($gender = 2) {
                                $gender = "Laki-laki";
                            }
                            $fakultas = $_POST['fakultas'];
                            $jurusan = $_POST['jurusan'];
                            $kelas = $_POST['kelas'];
                            $semester = $_POST['semester'];
                            $wali = $_POST['wali'];
                            $findwali = mysqli_query($con, "SELECT * FROM dosen WHERE kode_dosen='$wali'");
                            $ardosen = mysqli_fetch_array($findwali);
                            $namawali = $ardosen['nama'];

                            $sql = "INSERT INTO `mahasiswa`(`nim`, `nama`, `email`, `gender`, `fakultas`, `jurusan`, `kelas`, `birthdate`, `semester`, `wali`, `status`, `bio`, `profil`, `sampul`) VALUES 
                            ('$nim','$nama','$email','$gender','$fakultas','$jurusan','$kelas','$tanggal','$semester','$wali','Aktif','Halo saya $namawali','profile/KazeProfile.jpeg','sampul/KazeSampul.jpeg')";

                            $sql0 = "INSERT INTO `user`(`kode_login`, `password`, `status`, `email`) VALUES 
                            ('$nim','a25e7ea9ad877e9dc33f1d671aa00d4c','1','$email')";

                            $sql1 = "INSERT INTO `anggota_kelas`(`kode_kelas`, `pelajaran`, `nim`, `kode_dosen`, `kelas`, `sampul`) VALUES 
                            ('221202','Algoritma & Pemrograman','$nim','049','B','NULL')";

                            $sql2 = "INSERT INTO `nilai`(`nim`, `nama`, `kelas`, `dosen`, `kode_kelas`, `pelajaran`, `tugas 1`, `tugas 2`, `tugas 3`, `tugas 4`, `tugas 5`, `absensi`, `uts`, `uas`, `nilai akhir`) VALUES 
                            ('$nim','$nama','$kelas','$namawali','221202','Algoritma & Pemrograman','0','0','0','0','0','0','0','0','0')";

                            if (mysqli_query($con, $sql)) {
                                echo '<div class="alert alert-success solid alert-square "><strong>Sukses !</strong> Mahasiswa telah ditambahkan.</div>';
                            } else {
                                echo '<div class="alert alert-danger solid alert-square "><strong>Gagal !</strong> ' . $sql . '</div>';
                            }
                            if (mysqli_query($con, $sql0)) {
                                echo '<div class="alert alert-success solid alert-square "><strong>Sukses !</strong> LoginMahasiswa telah ditambahkan.</div>';
                            } else {
                                echo '<div class="alert alert-danger solid alert-square "><strong>Gagal !</strong> ' . $sql0 . '</div>';
                            }
                            if (mysqli_query($con, $sql1)) {
                                echo '<div class="alert alert-success solid alert-square "><strong>Sukses !</strong> Mahasiswa telah ditambahkan kedalam kelas.</div>';
                            } else {
                                echo '<div class="alert alert-danger solid alert-square "><strong>Gagal !</strong> ' . $sql1 . '</div>';
                            }
                            if (mysqli_query($con, $sql2)) {
                                echo '<div class="alert alert-success solid alert-square "><strong>Sukses !</strong>Nilai Mahasiswa telah ditambahkan.</div>';
                            } else {
                                echo '<div class="alert alert-danger solid alert-square "><strong>Gagal !</strong> ' . $sql2 . '</div>';
                            }
                        ?>

                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>