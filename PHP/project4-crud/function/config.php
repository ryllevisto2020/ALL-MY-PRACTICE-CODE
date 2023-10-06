<?php
$user = "root";
$pass = "";
$db = "creds";
$host = "127.0.0.1";
try {
    //code...
    $con = mysqli_connect($host,$user,$pass,$db);
} catch (\Throwable $th) {
    //throw $th;
}
?>