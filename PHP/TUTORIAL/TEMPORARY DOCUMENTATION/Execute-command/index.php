<?php
header('Content-Type: application/json');
$output = null;
$result = null;
exec("dir", $output,$result);
//print_r($output);

$result_=null;
system("dir",$result_);
print_r($result_);