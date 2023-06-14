<?php

require_once __DIR__ . '/../vendor/autoload.php';

$test = true;

$request = $_SERVER;

$auto = new \stdClass();
$auto->test = "halle";

for ($i = 0; $i < 100; $i++) {
    $test = $i * 2;
}


xdebug_info();
//phpinfo();
