<?php
namespace App;
use App\core\Base\BaseController;

class HomeController extends BaseController
{
    public function index() {
        $this->render('Templates/Home/Home.latte', [
            "controllerName" => 'HomeController'
        ]);
    }
}