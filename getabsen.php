<?php
include 'classes/connection.classes.php';
include 'classes/session.classes.php';
?>
<tr>
    <?php
    $NIM = $_SESSION['kode_login'];
    $kode_absen = $_GET['kodepertemuan'];
    $qdataabs = mysqli_query($con, "SELECT * FROM absen WHERE kode_pertemuan='$kode_absen' and nim='$NIM'");
    $keyabs = mysqli_fetch_array($qdataabs);
    ?>
    <td colspan="4">Nama</td>
    <td colspan="4"><?php echo $keyabs['nama'] ?></td>
</tr>