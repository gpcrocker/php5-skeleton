<?php
//global bootstrap

error_reporting(E_ALL);

date_default_timezone_set('GMT');

// set constants 
define('ROOT', __DIR__);
define('APP', ROOT . DIRECTORY_SEPARATOR . 'app');
define('PUB', ROOT . DIRECTORY_SEPARATOR . 'pub');
define('VENDOR', ROOT . DIRECTORY_SEPARATOR . 'vendor');
define('COMPOSER_AUTOLOAD', VENDOR . DIRECTORY_SEPARATOR . 'autoload.php'); 

// Check if Composer is installed
if (!is_dir(VENDOR)) {
    throw new Exception('No vendor folder detected. ' .
     'Please run composer install or check file permissions' . PHP_EOL);
}

// Autoload your app folder

require_once(COMPOSER_AUTOLOAD);
