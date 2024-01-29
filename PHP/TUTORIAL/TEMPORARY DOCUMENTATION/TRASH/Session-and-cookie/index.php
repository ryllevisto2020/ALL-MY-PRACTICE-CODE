<?php
session_start();
$_SESSION['uid'] = 123;
echo "Session Value:".$_SESSION['uid']."";
echo "<br>";
unset($_SESSION['uid']);
session_destroy();
if($_SESSION['uid'] == ''){
    echo "No Session Save";
    $_SESSION['uid'] = 456;
    echo "<br>";
    echo "Session Value:".$_SESSION['uid']."";
    echo "<br>";
    if($_SESSION['uid'] == ''){
        echo "No Session Save";
    }else{
        echo "Session Save";
    }
}else{
    echo "Session Save";
}
echo "<br>";
echo "<br>";
setcookie("uid",123,time()+3600);
echo "Cookie Value:".$_COOKIE['uid']."";
echo "<br>";
unset($_COOKIE['uid']);
if($_COOKIE['uid'] == ''){
    echo "No Cookie Save";
    setcookie("uid",456,time()+3600);
    echo "<br>";
    echo "Cookie Value:".$_COOKIE['uid']."";
}else{
    echo "Cookie Save";
}
?>