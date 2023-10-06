<?php
require 'vendor/autoload.php';
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
    $key = "YourNotBelongHereMotherFucker";
    if(isset($_COOKIE["Authorization"])){
        $auth_code = $_COOKIE["Authorization"];
        $auth_decode = json_decode($auth_code);
        $decode = JWT::decode($auth_decode,new key($key,'HS256'));
        if($decode->username=="userrr"&&$decode->password=="passrr"){
            
            print_r("auth");
        }else{
            $server_port = $_SERVER['SERVER_PORT'];
            $server_name = $_SERVER['SERVER_NAME'];
            //$host = location.host;
            $redirect = $server_name+":"+$server_port+"/project1/";
            header("Location: ".$redirect."");
        }
    }else{
        
        $server_port = $_SERVER['SERVER_PORT'];
            $server_name = $_SERVER['SERVER_NAME'];
            //$host = location.host;
            $redirect = $server_name.':'.$server_port.'/project1';
            //print_r($redirect);
            header('Location: index.php?url=login.php&auth=false');
    }
?>