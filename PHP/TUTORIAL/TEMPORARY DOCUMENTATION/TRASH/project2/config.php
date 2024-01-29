<?php
header('Content-type: application/json; charset=utf-8');
require 'vendor/autoload.php';
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

$GLOBALS['user']="root";
$GLOBALS['pass'] = "";
$GLOBALS['server'] = "localhost";
$GLOBALS['port'] = 3306;
$GLOBALS['db'] = "creds";

$GLOBALS['mysql'] = @mysqli_connect($GLOBALS['server'],$GLOBALS['user'],$GLOBALS['pass'],$GLOBALS['db'],$GLOBALS['port']);

function check(){
    if($GLOBALS['mysql']){
        $no_err = array(
            "code"=>"1", // Code '1' means database is established!
            "message"=>"Database Connected!"
        );
        $return_no_err = (json_encode($no_err));
        return $return_no_err;
    }else{
        $err = array(
            "code"=>"0", // Code '0' means database is not established!
            "message"=>"Couldn't Connect to Database!"
        );
        $return_error = (json_encode($err));
        return $return_error;
    }
}

?>