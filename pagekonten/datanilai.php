<style>
    #loader {
        display: none;
        margin-top: 10px;
    }
</style>
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Nilai</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Mahasiswa</h4>
                    </div>
                    <div class="card-body">
                        <select class="form-control" id="mahasiswa">
                            <option class="form-control" value="0">Pilih Mahasiswa</option>
                            <?php
                            $kode_dsn = $_SESSION['kode_login'];
                            $qmahasiswa = mysqli_query($con, "SELECT * FROM anggota_kelas");
                            foreach ($qmahasiswa as $keymahasiswa) {
                                echo '<option  class="form-control" value="' . $keymahasiswa['nim'] . '">' . $keymahasiswa['nama'] . '</option>';
                            }
                            ?>
                        </select>
                        <hr>
                        <center><img src="css/loader.gif" id="loader"></center>
                        <div id="data-nilai">
                            <?php if (isset($_POST['submit'])) {
                                $tugas1 = $_POST['tugas1'];
                                $tugas2 = $_POST['tugas2'];
                                $tugas3 = $_POST['tugas3'];
                                $tugas4 = $_POST['tugas4'];
                                $tugas5 = $_POST['tugas5'];
                                $absensi = $_POST['absensi'];
                                $uts = $_POST['uts'];
                                $uas = $_POST['uas'];
                                $akhir = $_POST['akhir'];


                                $sql = "UPDATE `nilai` SET `tugas 1`='$tugas1',`tugas 2`='$tugas2',`tugas 3`='$tugas3',`tugas 4`='$tugas4',`tugas 5`='$tugas5',`absensi`='$absensi',`uts`='$uts',`uas`='$uas',`nilai akhir`='$akhir' WHERE 1";
                                if (mysqli_query($con, $sql)) {
                                    echo '<div class="alert alert-success solid alert-square "><strong>Sukses !</strong> Nilai telah ditambahkan.</div>';
                                } else {
                                    echo '<div class="alert alert-danger solid alert-square "><strong>Gagal !</strong> Nilai gagal ditambahkan.</div>';
                                }
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {

            $("#mahasiswa").change(function() {

                $("#loader").show();

                var getUserID = $(this).val();

                if (getUserID != '0') {
                    $.ajax({
                        type: 'GET',
                        url: 'getdbnilai.php',
                        data: {
                            kodemhs: getUserID
                        },
                        success: function(data) {
                            $("#loader").hide();
                            $("#data-nilai").html(data);
                        }
                    });
                } else {
                    $("#data-nilai").html('');
                    $("#loader").hide();
                }
            });

        });
    </script>