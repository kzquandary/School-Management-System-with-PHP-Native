<?php
DEFINE("HOST","localhost");
DEFINE("UNAME","root");
DEFINE("PW","");
DEFINE("DB","kazeproject");

GLOBAL $con;
$con = mysqli_connect(HOST,UNAME,PW,DB);
?>