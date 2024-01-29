<?php
include('config.php');
//include('antixss.php');
require 'vendor/autoload.php';
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
session_start();
$a = new db_error();
$check_decode = json_decode(check());
if($check_decode->code=="0"){
    $a->set_error_code($check_decode->code);
    $a->set_error_message($check_decode->message);
    
    print_r($a->db_error_array());
}if($check_decode->code=="1"){
        $stmnt = "SELECT * FROM `creds_info`";
    $query = mysqli_query($GLOBALS['mysql'],$stmnt);
    if(mysqli_num_rows($query)>0){
        $data = array();
        for ($i=0; $i < $query->num_rows; $i++) { 
            # code...
            $retrieve = mysqli_fetch_object($query);
            $data[] = $retrieve;
        }
        $final = json_encode($data);
        print_r($final);
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