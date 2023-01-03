<?php

namespace Codeacademy\Di\Controllers;

class HomePageController
{
    public function RenderHomePage(): string
    {
        return '<h1> Welcome to Home Page :) <h1>';
    }

    public function RendernotFoundPage(): string
    {
        return '<h1> Page not Found :) </h1>';
    }
}

