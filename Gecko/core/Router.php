<?php

namespace core;
use Closure;

require_once "../init.php";


class Router {
    protected $routes  = [];
    public function __construct(
    ) {

    }

    public function add($method, $url, closure $target) {
        $this->routes[$method][$url] = $target;
        //https://tech.jotform.com/what-is-router-and-how-to-create-your-own-router-with-php-fad811cf2873
    }
    public function match() {
        $method = $_SERVER["REQUEST_METHOD"];
        $url = $_SERVER["REQUEST_URI"];
        if (isset($this->routes[$method])) {
            foreach ($this->routes[$method] as $routeUrl => $target) {
                // Simple string comparison to see if the route URL matches the requested URL
                if ($routeUrl === $url) {
                    call_user_func($target);
                }
            }
        }
        throw new \Exception("Route not found");
    }


}
