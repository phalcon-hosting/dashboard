<?php
error_reporting(E_ALL);
ini_set('display_errors',1);


define('ROOT_PATH', realpath( __DIR__ . '/..'));
define('APPLICATION_PATH', realpath( ROOT_PATH . '/app'));

// Define application environment
// Change 'development' to 'production' once the application is up and running on the production site
defined('APPLICATION_ENV')
|| define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'development'));

include(ROOT_PATH . "/vendor/autoload.php");

$config = include ROOT_PATH . "/app/config/config.php";
$di = include ROOT_PATH . "/app/services.php";
$di["config"] = $config;


$app = new \Slim\Slim();
$app->setName("PH");
$app->container->set("di", $di);

$routingManager = new \Slim\Routing\Manager([
    ROOT_PATH . "/app/Controllers"
], ROOT_PATH . "/app/cache");
$routingManager->setAppName("PH");
$routingManager->setDefaultNamespace("Controllers");
$routingManager->generateRoutes();


$app->run();

