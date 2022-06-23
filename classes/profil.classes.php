<?php
$_GET['id'];
$id = $_GET['id'];
$query = "SELECT * FROM user WHERE kode_login='$id'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);

if ($result) {
  if (mysqli_num_rows($result) > 0) {
    if ($row['status'] == "1") {
      $nim = $_GET['id'];
      $data = mysqli_query($con, "select * from mahasiswa where nim='$nim'");
      $cek = mysqli_fetch_array($data);
      $status = "1";
      $namap = $cek['nama'];
      $kode_userp = $cek['nim'];
      $potoprofilp = $cek['profil'];
      $potosampulp = $cek['sampul'];
      $kelasp = $cek['kelas'];
      $jurusanp = $cek['jurusan'];
      $fakultasp = $cek['fakultas'];
      $semesterp = $cek['semester'];
      $genderp = $cek['gender'];
      $emailp = $cek['email'];
      $birthdatep = $cek['birthdate'];
      $walip = $cek['wali'];
      $statusp = $cek['status'];
      $biop = $cek['bio'];
      $role = "Mahasiswa";
    }
    if ($row['status'] == "2") {
      $kode_dosen = $_GET['id'];
      $data = mysqli_query($con, "select * from dosen where kode_dosen='$kode_dosen'");
      $cek = mysqli_fetch_array($data);
      $status = "2";
      $namap = $cek['nama'];
      $kode_userp = $cek['kode_dosen'];
      $potoprofilp = $cek['profil'];
      $potosampulp = $cek['sampul'];
      $emailp = $cek['email'];
      $genderp = $cek['gender'];
      $biop = $cek['bio'];
      $role = "Dosen";
    }
    if ($row['status'] == "3") {
      $kode_admin = $_GET['id'];
      $data = mysqli_query($con, "SELECT * FROM admin where kode_admin='$kode_admin'");
      $cek = mysqli_fetch_array($data);
      $status = "3";
      $namap = $cek['nama'];
      $kode_userp = $cek['kode_admin'];
      $potoprofilp = $cek['profil'];
      $potosampulp = $cek['sampul'];
      $emailp = $cek['email'];
      $biop = $cek['bio'];
      $role = "Admin";
    }
  } else if ($id == NULL) {
    header("Location: profil.php?id=$_SESSION[kode_login]");
  } else if (mysqli_num_rows($result) == 0) {
    header("Location: usernfound.php?id=$_GET[id]");
  }
} else {
  echo 'Error';
}
