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
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Absen</a></li>
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
                        <select class="form-control" id="kelas">
                            <option class="form-control" value="0">Pilih Kelas</option>
                            <?php
                            $NIM = $_SESSION['kode_login'];
                            $qanggota = mysqli_query($con, "SELECT * FROM anggota_kelas WHERE nim='$NIM'");
                            foreach ($qanggota as $keyanggota) {
                                echo '<option  class="form-control" value="' . $keyanggota['kode_kelas'] . '">' . $keyanggota['pelajaran'] . '</option>';
                            }
                            ?>
                        </select>
                        <hr>
                        <center><img src="css/loader.gif" id="loader"></center>
                        <div id="data-pertemuan"></div>
                        <hr>
                        <div class="table-responsive">
                            <table id="myTable" class="display table table-striped">
                                <thead>
                                <tbody id="data-absen">
                                    <center><img src="css/loader.gif" id="loader"></center>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {

            $("#kelas").change(function() {

                $("#loader").show();

                var getUserID = $(this).val();

                if (getUserID != '0') {
                    $.ajax({
                        type: 'GET',
                        url: 'getpertemuan.php',
                        data: {
                            kodekelas: getUserID
                        },
                        success: function(data) {
                            $("#loader").hide();
                            $("#data-pertemuan").html(data);
                        }
                    });
                } else {
                    $("#data-pertemuan").html('');
                    $("#data-absen").html('');
                    $("#loader").hide();
                }
            });

        });
    </script>