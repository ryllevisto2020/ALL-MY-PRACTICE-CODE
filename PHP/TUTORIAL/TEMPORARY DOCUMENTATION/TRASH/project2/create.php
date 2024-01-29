<?php
include('config.php');
//include('antixss.php');
require 'vendor/autoload.php';
require 'antixss.php';
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

$a = new db_error();
$check_decode = json_decode(check());
if($check_decode->code=="0"){
    $a->set_error_code($check_decode->code);
    $a->set_error_message($check_decode->message);
    
    print_r($a->db_error_array());
}if($check_decode->code=='1'){
    if(isset($_GET['signUp'])=='signUp'){
        $creds_info_encode = json_encode($_GET['creds_info']);
        $creds_info_decode = json_decode($creds_info_encode);
        $username = mysqli_escape_string($GLOBALS['mysql'],$creds_info_decode->username);
        $password = mysqli_escape_string($GLOBALS['mysql'],$creds_info_decode->password);
        $key_md5 = hash('md5','vistorylleInformationTech');
        $key_sha256 = hash('sha256',$key_md5);
        $key = $key_sha256;
        $payload = [
            'date' => date('y/d/m'),
            'time' => date('h:m:s'),
            'authenticate'=>true,
        ];
        $encode = JWT::encode($payload,$key,'HS256'); 
        $encode_token_md5 = hash('md5',$encode);
        session_start();
        $_SESSION['authentication_xss']= $encode_token_md5;
        $_SESSION['authentication_xss_token']= $encode;
        $final = json_decode(checkString($username,$password));
        $stmnt = "INSERT INTO `creds_info`(`id`, `uname`, `pword`) VALUES (NULL,'$final->username','$final->password')";
        $query = mysqli_query($GLOBALS['mysql'],$stmnt);
        $success = array(
            "code"=>"1", // Code '1' means database is established!
            "message"=>"Data Inserted!"
        );
        print_r(json_encode($success));
        session_unset();
        session_destroy();
    }
}
class db_error{
    private $code;
    private $message;
    function set_error_code($error_code){
        $this->code = $error_code;
    }
    function set_error_message($error_message){
        $this->message = $error_message;
    }
    function get_error_message(){
        return $this->message;
    }
    function get_error_code(){
        return $this->code;
    }
    function db_error_array(){
        $array = array(
            "code"=>$this->code,
            "message"=>$this->message
        );
        $encode_array = json_encode($array);
        return $encode_array;
    }
}
?>