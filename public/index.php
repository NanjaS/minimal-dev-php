<?php
use App\Controller\IndexController;
use App\Controller\ApiController;
use Exception as Exception;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

require_once __DIR__ . '/../vendor/autoload.php';

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();


//setup
$loader = new FilesystemLoader(__DIR__ . '/../template/html');
$twig = new Environment($loader, [
    'cache' => __DIR__ . '/../tmp/twig',
    'debug' => true,
]);

// .../car/vm/polo?color=blue&wheels=4

// .../car
// .../test
$requestPath = $_SERVER['REQUEST_URI'];

if ($requestPath === '/') {
    $indexController = new IndexController($twig);
    $indexController->index();
} else if ($requestPath === '/title') {
    $apiController = new ApiController();
    $apiController->createGateway();
} else {
    throw new Exception('404 Page not found');
}