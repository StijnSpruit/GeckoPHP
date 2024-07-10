<?php
namespace Stijnspruit\GeckoPhp\Controllers;
use core\Base\BaseController;

class HomeController extends BaseController
{
    public function routes(): void
    {
        $this->router->add('GET','/', $this->index());
        $this->router->match();
    }
    public function index(): void
    {
        $this->render('Templates/Home/Home.latte', [
            "controllerName" => 'HomeController'
        ]);
    }
}