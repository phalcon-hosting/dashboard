<?php
error_reporting(E_ALL);
ini_set('display_errors',1);


define('ROOT_PATH', realpath( __DIR__ . '/..'));
define('APPLICATION_PATH', realpath( ROOT_PATH . '/app'));

// Define application environment
// Change 'development' to 'production' once the application is up and running on the production site
defined('APPLICATION_ENV')
|| define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'development'));

// composer
include(ROOT_PATH . "/vendor/autoload.php");

// Debug mode only if dev
if ("development" == APPLICATION_ENV) {
    $debug = new \Phalcon\Debug();
    $debug->listen();
}


// Read the configuration
$config = include __DIR__ . "/../app/config/config.php";


// Read services
include __DIR__ . "/../app/services.php";


// Handle the request
$application = new \Phalcon\Mvc\Application();
$application->setDI($di);


echo $application->handle()->getContent();
// exception/404 managed from the dispatcher event