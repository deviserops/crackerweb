<?php

error_reporting(E_ALL);
ini_set('display_errors', true);

include_once __DIR__ . '/config/config.php';
require __DIR__ . '/vendor/autoload.php';


$crack = new crack();
$crack->run();
