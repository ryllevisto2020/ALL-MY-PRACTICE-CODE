<?php
require 'vendor/autoload.php';
//nclude('create.php');
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
function checkString($username,$password){
    if($_SESSION['authentication_xss']){
        $key_md5 = hash('md5','vistorylleInformationTech');
        $key_sha256 = hash('sha256',$key_md5);
        $key = $key_sha256;
        $token = JWT::decode($_SESSION['authentication_xss_token'],new key($key,'HS256'));
        if($token->authenticate){
            $re_lt = '/\</m'; // for <
            $re_gt = '/\>/m'; // for >
            $subs_lt = '&lt;';
            $subs_gt = '&gt;';
            $creds = array(
                "username"=>$username,
                "password"=>$password
            );
            $result_phase1 = preg_replace($re_lt, $subs_lt,$creds);
            $result_phase2 = preg_replace($re_gt, $subs_gt,$result_phase1);
            return json_encode($result_phase2);
        }else{
            //
        }
    }else{
        //
    }
}
?>