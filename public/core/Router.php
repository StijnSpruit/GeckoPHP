<?php

namespace App\core;
use Symfony\Component\Routing\RouteCollection;
class Router {
    public $routes;
    public function __construct(RouteCollection $routes) {
        $this->routes = $routes;
    }


}
