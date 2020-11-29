<?php

namespace App\Controllers;

class ViewController extends BaseController{

    public function viewController(){
        echo $this->renderView('paginas/home.twig');
    }

}