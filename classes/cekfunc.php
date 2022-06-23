<?php
include 'function.classes.php';
$username = strtolower("kzquandary");
$password = md5("kaze1234");
echo login($username, $password);
?>