<?php
include 'classes/connection.classes.php';
$nim = $_GET['kodemhs'];
$qdbmhs = mysqli_query($con, "SELECT * FROM nilai WHERE nim='$nim'");
$keymhs = mysqli_fetch_array($qdbmhs);
?>
<div class="col-xl-12 col-lg-12">
    <div class="card">
        <div class="card-body">
            <div class="basic-form">
                <form action="" method="post">
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-lg" value="<?= $keymhs['nama'] ?>" required />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">NIM</label>
                        <div class="col-sm-10">
                            <input type="text" name="nim" class="form-control form-control-lg" value="<?= $nim ?>" required />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Tugas 1</label>
                        <div class="col-sm-10">
                            <input type="text" name="tugas1" class="form-control form-control-lg" value="<?= $keymhs['tugas 1'] ?>" required />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Tugas 2</label>
                        <div class="col-sm-10">
                            <input type="text" name="tugas2" class="form-control form-control-lg" value="<?= $keymhs['tugas 2'] ?>" required />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Tugas 3</label>
                        <div class="col-sm-10">
                            <input type="text" name="tugas3" class="form-control form-control-lg" value="<?= $keymhs['tugas 3'] ?>" required />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Tugas 4</label>
                        <div class="col-sm-10">
                            <input type="text" name="tugas4" class="form-control form-control-lg" value="<?= $keymhs['tugas 4'] ?>" required />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Tugas 5</label>
                        <div class="col-sm-10">
                            <input type="text" name="tugas5" class="form-control form-control-lg" value="<?= $keymhs['tugas 5'] ?>" required />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Absensi</label>
                        <div class="col-sm-10">
                            <input type="text" name="absensi" class="form-control form-control-lg" value="<?= $keymhs['absensi'] ?>" required />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">UTS</label>
                        <div class="col-sm-10">
                            <input type="text" name="uts" class="form-control form-control-lg" value="<?= $keymhs['uts'] ?>" required />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">UAS</label>
                        <div class="col-sm-10">
                            <input type="text" name="uas" class="form-control form-control-lg" value="<?= $keymhs['uas'] ?>" required />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Nilai Akhir</label>
                        <div class="col-sm-10">
                            <input type="text" name="akhir" class="form-control form-control-lg" value="<?= $keymhs['nilai akhir'] ?>" required />
                        </div>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary form-control">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>