<?php 
include 'classes/connection.classes.php';
require 'classes/session.classes.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php
require 'pageview/header.php';
?>

<body>
    <div id="main-wrapper">
        <?php
        require 'pageview/preloadchat.php';
        require 'pageview/hkonten.php';
        require 'pageview/sidebar.php';
        require 'pageview/home.php';
        require 'pageview/footer.php';
        ?>
    </div>
</body>