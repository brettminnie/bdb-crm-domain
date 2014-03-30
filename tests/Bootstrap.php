<?php
chdir(dirname(__DIR__));
date_default_timezone_set('Europe/London');
error_reporting(E_ALL|E_STRICT);
ini_set('display_errors', true);
ini_set('log_errors', false);

if (file_exists('vendor/autoload.php')) {
    $loader = include 'vendor/autoload.php';
}

$_SERVER['HTTP_USER_AGENT'] = 'foo';
$_SERVER['LOCAL_ADDR']      = '127.0.0.1';
$_SERVER['LOCAL_PORT']      = '80';
$_SERVER['REMOTE_ADDR']     = '127.0.0.1';
$_SERVER['REMOTE_PORT']     = '80';
