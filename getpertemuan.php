<?php
include 'classes/connection.classes.php';
$kelasabsen = $_GET['kodekelas'];
?>
<select class="form-control" id="pertemuan">
    <option class="form-control" value="0">Pilih Pertemuan</option>
    <?php
    $qpertemuan = mysqli_query($con, "SELECT * FROM kabsen WHERE kode_kelas=$kelasabsen");
    if (mysqli_num_rows($qpertemuan) > 0) {
        foreach ($qpertemuan as $keypertemuan) {
            echo '<option  class="form-control" value="' . $keypertemuan['kode_absen'] . '"> Pertemuan Ke - ' . $keypertemuan['pertemuan'] . '</option>';
        }
    } else {
        echo ' <option value="0">Tidak ada pertemuan</option>';
    }
    ?>
</select>
<script>
    $(document).ready(function() {

        $("#pertemuan").change(function() {

            $("#loader").show();

            var getKode = $(this).val();

            if (getKode != '0') {
                $.ajax({
                    type: 'GET',
                    url: 'getabsen.php',
                    data: {
                        kodepertemuan: getKode
                    },
                    success: function(data) {
                        $("#loader").hide();
                        $("#data-absen").html(data);
                    }
                });
            } else {
                $("#data-absen").html('');
                $("#loader").hide();
            }
        });

    });
</script>