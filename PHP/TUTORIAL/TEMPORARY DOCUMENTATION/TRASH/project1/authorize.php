<?php
    $header_request = apache_request_headers();
    header("Content-type: text/json");
    require 'vendor/autoload.php';
    use Firebase\JWT\JWT;
    use Firebase\JWT\Key;

    $key = "YourNotBelongHereMotherFucker";
    if(isset($_COOKIE["Authorization"])){
        $auth_code = $_COOKIE["Authorization"];
        $auth_decode = json_decode($auth_code);
        $decode = JWT::decode($auth_decode,new key($key,'HS256'));
        if($decode->authorize){
            print_r("auth");
        }
    }else{
        print_r("not auth");
    }
    
?>