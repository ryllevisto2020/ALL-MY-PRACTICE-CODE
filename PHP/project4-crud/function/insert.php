<?php
session_start();
include "config.php";
header('Content-Type: application/json; charset=utf-8');

try {
    //code...
    if($_SESSION['auth']){
        echo "auth";
        session_unset();
        session_destroy();
    }else{
        echo "not auth";
    }
} catch (\Throwable $th) {
    //throw $th;
}

?>