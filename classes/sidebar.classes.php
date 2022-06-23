<?php
$querymhs = "SELECT * FROM anggota_kelas WHERE nim='$kode_user'";
$querydsn = "SELECT * FROM anggtoa_kelas WHERE kode_dosen='$kode_user'";

$querymhsdata = mysqli_query($con,$querymhs);
$querydsndata = mysqli_query($con,$querydsn);

$datadsn = mysqli_fetch_array($querydsndata);
$datamhs = mysqli_fetch_array($querymhsdata);

$assocmhs = mysqli_fetch_assoc($querymhsdata);
$assocmhs = mysqli_fetch_assoc($querydsndata);

?>