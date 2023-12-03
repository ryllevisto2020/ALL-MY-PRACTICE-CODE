<?php
$uploads_dir = '/upload';
$src = $_FILES["files"]["tmp_name"];
$dsc = $_FILES["files"]["name"];
try {
    //code...
    move_uploaded_file($src, $dsc);
    header("Location:index.php");
    exit();
} catch (\Throwable $th) {
    //throw $th;
}

?>