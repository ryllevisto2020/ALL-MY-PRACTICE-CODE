<?php
header('Content-Type: application/json');
require("vendor/autoload.php");
use phpseclib3\Net\SSH2;

$ssh = new SSH2('localhost', 22);