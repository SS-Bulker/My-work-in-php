<?php

namespace src\Routes;

class Router {
    private $controller;
    private $method;

    public function __construct(){
        $this->matchRoute();
    }

    public function matchRoute(){
        $url = explode('/', URL);

        $this->controller = !empty($url[1]) ? $url[1] : 'Template';
        $this->method = !empty($url[2]) ? $url[2] : 'home';

        $this->controller = $this->controller . 'Controller';

        require_once(DIR . '/src/Controllers/'.$this->controller.'.php');
    }

    public function run(){
        $class = trim("\src\Controllers\ ").$this->controller;

        $controller = new $class;

        $method = $this->method;
        $controller->$method();
    }
}