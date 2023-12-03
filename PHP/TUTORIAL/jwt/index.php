<?php
header('Content-Type: application/json');
include('vendor/autoload.php');
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

//encode payload
$payload = [
    'name' => "visto",
    'id'=>1,
    'auth'=>true
];
$key = "visto";
$jwt_encode = JWT::encode($payload, $key, 'HS256');
print_r($jwt_encode);
echo('<br>');
echo('<br>');

//decode payload
try {
    //code...
    $jwt_decode = JWT::decode($jwt_encode, new Key($key, 'HS256'));
    print_r($jwt_decode);
} catch (\Throwable $th) {
    //throw $th;
    print_r($th);
}

?>