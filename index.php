<?php
use Codeacademy\Di\Framework\Router;
use Codeacademy\Di\Container\DIContainer;

//declare(strict_types=1);
require_once './vendor/autoload.php';


//Load custom DI container
$container = new DIContainer();
$container->loadDependencies();

//Use custom router
 $requestUrl = str_replace('/Kamile_Vaiciulaityte/DI','',$_SERVER['REQUEST_URI']);
 $router = $container->get(Router::class);
 $router->process($requestUrl);