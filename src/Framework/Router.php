<?php

namespace Codeacademy\Di\Framework;


use Codeacademy\Di\Controllers\CarController;
use Codeacademy\Di\Controllers\HomePageController;

class Router
{

    public function __construct(
        private HomePageController $homePageController,
        private CarController $carController)
    {

    }
    public function process(string $route){
        switch ($route) {
            case '/':
               echo $this->homePageController->RenderHomePage();
                break;

            case '/car/details':
                echo $this->carController->details();
                break;

            case '/car/list':
                echo $this->carController->list();
                break;


            default:
                http_response_code(404);
                echo $this->homePageController->RendernotFoundPage();
                break;
        }
}
}