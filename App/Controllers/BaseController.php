<?php

namespace App\Controllers;

class BaseController{

    protected $templateEngine; 

    public function __construct(){
        $loader = new \Twig\Loader\FilesystemLoader('App/Views');
        $this->templateEngine = new \Twig\Environment($loader, array('debug'=>true, 'cache'=>false));
    }

    public function renderView($fileName, $data = []){
        return $this->templateEngine->render($fileName, $data);
    }

}