<?php

use Dotenv\Dotenv;

require __DIR__.'/../vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__.'/environment', Core\Helper::isProd() ? 'prod.env' : 'dev.env');
$dotenv->load();

ini_set('display_errors', $_ENV['DISPLAY_ERRORS']);
ini_set('display_startup_errors', $_ENV['DISPLAY_STARTUP_ERRORS']);
error_reporting(E_ALL);

define('ABSOLUTE_ROOT_PATH', $_SERVER['SERVER_NAME']);

define('STORAGE_PATH', ABSOLUTE_ROOT_PATH . PATH_SEPARATOR . 'storage');


