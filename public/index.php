<?php
use App\Controller\IndexController;
use App\Controller\ApiController;
use Exception;

require_once __DIR__ . '/../vendor/autoload.php';

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();



// .../car/vm/polo?color=blue&wheels=4


// .../car
// .../test
$requestPath = $_SERVER['REQUEST_URI'];

var_dump($requestPath);

if ($requestPath === '/') {
    $indexController = new IndexController();
    $indexController->index();
} else if ($requestPath === '/api') {
    $apiController = new ApiController();
    $apiController->createGateway();
} else {
    throw new Exception('404 Page not found');
}

