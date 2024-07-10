<?php
require "../vendor/autoload.php";
class INIT {
    public \core\Router $router;
    public function __construct()
    {
        $this->router = new \core\Router();

    }

}

