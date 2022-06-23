<script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="js/plugins-init/datatables.init.js"></script>
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Nilai</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)"><?php echo $nama; ?></a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Mahasiswa</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="myTable" class="display table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>NIM</th>
                                        <th>Nama</th>
                                        <th>Pelajaran</th>
                                        <th>Dosen</th>
                                        <th>Tugas 1</th>
                                        <th>Tugas 2</th>
                                        <th>Tugas 3</th>
                                        <th>Tugas 4</th>
                                        <th>Tugas 5</th>
                                        <th>Absen</th>
                                        <th>UTS</th>
                                        <th>UAS</th>
                                        <th>Nilai Akhir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $NIM = $_SESSION['kode_login'];
                                    $dbnilai = "SELECT * FROM nilai WHERE nim='$NIM'";
                                    $hasildbnilai = mysqli_query($con, $dbnilai);
                                    foreach ($hasildbnilai as $kaze) {
                                    ?>
                                        <tr>
                                            <td><?= $kaze['nim']; ?></td>
                                            <td><?= $kaze['nama']; ?></td>
                                            <td><?= $kaze['pelajaran']; ?></td>
                                            <td><?= $kaze['dosen']; ?></td>
                                            <td><?= $kaze['tugas 1']; ?></td>
                                            <td><?= $kaze['tugas 2']; ?></td>
                                            <td><?= $kaze['tugas 3']; ?></td>
                                            <td><?= $kaze['tugas 4']; ?></td>
                                            <td><?= $kaze['tugas 5']; ?></td>
                                            <td><?= $kaze['absensi']; ?></td>
                                            <td><?= $kaze['uts']; ?></td>
                                            <td><?= $kaze['uas']; ?></td>
                                            <td><?= $kaze['nilai akhir']; ?></td>
                                        </tr>
                                </tbody>
                            <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>