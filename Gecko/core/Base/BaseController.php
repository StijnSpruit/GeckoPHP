<?php

namespace core\Base;

use core\Router;
use INIT;
use Latte\Engine;

class BaseController {
    private INIT $init;
    private Engine $latte;
    public Router $router;
    public function __construct(Engine $latte)
    {
        //latte templating
        $this->latte = $latte;
        $latte->setTempDirectory('../Base/tempDir');
        $this->init = require_once "../../init.php";
        //router
        $this->router = $this->init->router;
    }

    public function render($template, $data = []) {
        $this->latte->render($template, $data);
    }
}