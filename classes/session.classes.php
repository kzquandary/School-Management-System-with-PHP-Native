<?php
session_start();
if ($_SESSION['status'] != "1" && $_SESSION['status'] != "2" && $_SESSION['status'] != "3") {
    header("location:login.php");
}
if ($_SESSION['status'] == "1") {
    $nim = $_SESSION['kode_login'];
    $data = mysqli_query($con, "select * from mahasiswa where nim='$nim'");
    $cek = mysqli_fetch_array($data);
    $nama = $cek['nama'];
    $kode_user = $cek['nim'];
    $potoprofil = $cek['profil'];
    $potosampul = $cek['sampul'];
    $kelas = $cek['kelas'];
    $jurusan = $cek['jurusan'];
    $fakultas = $cek['fakultas'];
    $semester = $cek['semester'];
    $gender = $cek['gender'];
    $email = $cek['email'];
    $birthdate = $cek['birthdate'];
    $wali = $cek['wali'];
    $status = $cek['status'];
    $bio = $cek['bio'];
    $status = "1";
}
if ($_SESSION['status'] == "2") {
    $kode_dosen = $_SESSION['kode_login'];
    $data = mysqli_query($con, "select * from dosen where kode_dosen='$kode_dosen'");
    $cek = mysqli_fetch_array($data);
    $nama = $cek['nama'];
    $kode_user = $cek['kode_dosen'];
    $potoprofil = $cek['profil'];
    $potosampul = $cek['sampul'];
    $email = $cek['email'];
    $gender = $cek['gender'];
    $bio = $cek['bio'];
    $status = "2";
}
if ($_SESSION['status'] == "3") {
    $kode_admin = $_SESSION['kode_login'];
    $data = mysqli_query($con, "SELECT * FROM admin where kode_admin='$kode_admin'");
    $cek = mysqli_fetch_array($data);
    $nama = $cek['nama'];
    $kode_user = $cek['kode_admin'];
    $potoprofil = $cek['profil'];
    $potosampul = $cek['sampul'];
    $email = $cek['email'];
    $bio = $cek['bio'];
    $status = "3";
}
?>
<?php
// session_start();
// if($_SESSION['status']!="1" && $_SESSION['status']!="2" && $_SESSION['status']!="3"){
//     header("location:login.php?pesan=belum_login");
// }
//     if($_SESSION['status']=="1"){
//         $nim = $_SESSION['kode_login'];
//         $data = mysqli_query($con,"select * from mahasiswa where nim='$nim'");
//         $cek = mysqli_fetch_array($data);
//         $nama = $cek['nama'];
//         $kode_user = $cek['nim'];
//         $potoprofil = $cek['profil'];
//         $potosampul = $cek['sampul'];
//         $kelas = $cek['kelas'];
//         $jurusan = $cek['jurusan'];
//         $fakultas = $cek['fakultas'];
//         $semester = $cek['semester'];
//         $gender = $cek['gender'];
//         $email = $cek['email'];
//         $birthdate = $cek['birthdate'];
//         $wali = $cek['wali'];
//         $status = $cek['status'];
//         $bio = $cek['bio'];
//         $status = "1";
//     }
//     if($_SESSION['status'] == "2"){
//         $kode_dosen = $_SESSION['kode_login'];
//         $data = mysqli_query($con,"select * from dosen where kode_dosen='$kode_dosen'");
//         $cek = mysqli_fetch_array($data);
//         $nama = $cek['nama'];
//         $kode_user = $cek['kode_dosen'];
//         $potoprofil = $cek['profil'];
//         $potosampul = $cek['sampul'];
//         $email = $cek['email'];
//         $gender = $cek['gender'];
//         $bio = $cek['bio'];
//         $status = "2";
//     }
//     if($_SESSION['status'] == "3"){
//         $kode_admin = $_SESSION['kode_login'];
//         $data = mysqli_query($con,"SELECT * FROM admin where kode_admin='$kode_admin'");
//         $cek = mysqli_fetch_array($data);
//         $nama = $cek['nama'];
//         $kode_user = $cek['kode_admin'];
//         $potoprofil = $cek['profil'];
//         $potosampul = $cek['sampul'];
//         $email = $cek['email'];
//         $bio = $cek['bio'];
//         $status = "3";
//     }
?>