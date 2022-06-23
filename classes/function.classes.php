<?php
include 'connection.classes.php';

function login($username, $password){
    GLOBAL $con;
    $querylogin = "SELECT * FROM user where username='$username' and password='$password' ";
    $qlogin = mysqli_query($con, $querylogin);
    $cekrow = mysqli_num_rows($qlogin);
    if($cekrow>0){
        $status = true;
    }else{
        $status = false;
    }
    return $status;
}
function register($username, $password, $cpassword){
    GLOBAL $con;
    $queryregister = "SELECT * FROM user where username='$username'";
    $qregister = mysqli_query($con, $queryregister);
    $rowreg = mysqli_num_rows($qregister);
    if($rowreg>0){
        $isReg = false;
    }else{
        $isReg = true;
    }
    
    if($isReg=true){
        $status = true;
    }else{
        $status = false;
    }
    return $status;
}
function insertreg($username, $password, $cpassword){
    GLOBAL $con;
    $qinsert = "SELECT * FROM user where username='$username'";
    $qregister = mysqli_query($con, $queryregister);
    $rowreg = mysqli_num_rows($qregister);
}

?>