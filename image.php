<?php


if (isset($_POST['cover_up'])) {

    $imgFile = $_FILES['coverimg']['name'];
    $tmp_dir = $_FILES['coverimg']['tmp_name'];
    $imgSize = $_FILES['coverimg']['size'];

    if (!empty($imgFile)) {

        $upload_dir = 'profile/'; // upload directory

        $imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION)); // get image extension

        // valid image extensions
        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
        $Kaze = "Kaze";
        // rename uploading image
        $coverpic = $Kaze . "." . $imgExt;

        // allow valid image file formats
        if (in_array($imgExt, $valid_extensions)) {
            // Check file size '5MB'
            if ($imgSize < 5000000) {
                move_uploaded_file($tmp_dir, $upload_dir . $coverpic);
                echo "uploading Done";
            } else {
                $errMSG = "Sorry, your file is too large.";
            }
        } else {
            $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        }
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>

    <form method="post" enctype="multipart/form-data">
        <p><input type="file" name="coverimg" required="required" /></p>
        <p><input type="submit" name="cover_up" style="background-color: rgb(255, 102, 0);" class="btn btn-warning" value="Upload" /></p>
    </form>
</body>

</html>

Note : How to upload Image in Folder using PHP [With Database] , will be on my next post.

Now, Try this code…and Try to make your own new functions.Happy Coding..

STAY CONNECTED FOR MORE