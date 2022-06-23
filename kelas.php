<?php 
include 'classes/connection.classes.php';
	session_start();
	if($_SESSION['status']!="1" && $_SESSION['status']!="2" && $_SESSION['status']!="3"){
		header("location:login.php?belum_login");
	}
include 'classes/session.classes.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php
require 'page/header.php';
?>

<body>
    <div id="main-wrapper">
        <?php
        require 'page/preloadchat.php';
        require 'page/hkonten.php';
        require 'page/sidebar.php';
        require 'page/kelas.php';
        require 'page/footer.php';
        ?>
    </div>
</body>