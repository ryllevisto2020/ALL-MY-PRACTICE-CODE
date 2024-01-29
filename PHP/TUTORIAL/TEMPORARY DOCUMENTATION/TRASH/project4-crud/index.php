<?php

session_start();
$_SESSION["auth"]="auth";

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="">
        <link rel="stylesheet" href="css/stylesheet.css">
        <script src="js/validation.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <!--<script src="" async defer></script>-->
        <h1>Sign Up</h1>
        
        <input type="text" name="username" id="username" class="username" placeholder="Username">
        <span style="visibility: hidden;" id="" class="usernameErr">Enter Your username!</span>
        <br>
        <input type="password" name="password" id="password" class="password" placeholder="Password">
        <span style="visibility: hidden;" id="" class="passErr">Enter Your password!</span>
        <br>
        <input type="password" name="Confirmpassword" id="Confirmpassword" class="Confirmpassword" placeholder="Confirm Password" >
        <span style="visibility: hidden;" id="" class="confirmpassErr">Enter Your Confirm Password!</span>
        <br>
        <input type="button" value="Sign Up" id="SignUp" class="SignUp">
        
        
        <h1>Log In</h1>
        <input type="text" name="LoginUsername" id="LoginUsername" class="LoginUsername" placeholder="Username">
        <input type="password" name="LoginPassword" id="LoginPassword" class="LoginPassword" placeholder="Password">
        <input type="button" value="Login" id="LogIn" class="LogIn">
        
    </body>
</html>