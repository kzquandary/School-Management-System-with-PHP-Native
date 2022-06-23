<?php
include 'classes/connection.classes.php';
function caridata($database, $table, $data){
	GLOBAL $con;
    $sql = "SELECT * FROM $database WHERE $table = '$data'";
	$results = $con->query($sql);
	$row = $results->fetch_assoc();
	$results->free_result();
	return json_encode($row);
}
$kaze =  caridata("user","kode_login","3411211049");
$dc = json_decode($kaze, true);
echo $kaze;
echo $dc['password'];
 
function login($username, $password){
	GLOBAL $con;
	$sql = "SELECT * FROM user WHERE username = '$username' and password = '$password'";
	$query = mysqli_query($con, $sql);
	$row = mysqli_nums_row($query);
	if ($row > 0){
		$login = "Login";
	} else {
		$login = false;
	}
	return $login;
}
?>