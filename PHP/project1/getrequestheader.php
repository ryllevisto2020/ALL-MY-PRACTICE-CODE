<?php
    header("Content-type: text/json");
    require 'vendor/autoload.php';
    use Firebase\JWT\JWT;
    use Firebase\JWT\Key;

    $key = "YourNotBelongHereMotherFucker";
    $payload=[
        "username"=>"userrr",
        "password"=>"passrr",
        "authorize"=>"true",
        "date"=> date("Y/m/d"),
        "time"=>date("h:i:sa")
    ];

    $jwt = JWT::encode($payload,$key,"HS256");
    $decoded = JWT::decode($jwt, new Key($key, 'HS256'));
    $encode = json_encode($jwt);
    
    setcookie("Authorization", $encode, time() + (86400 * 30), "/"); // 86400 = 1 day
    print_r($encode);
    
?>