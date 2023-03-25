<?php

namespace src\Controllers;

use eftec\bladeone\BladeOne;

class Controller{

    protected $blade;

    public function __construct(){
        $this->loadTemplate();
    }

    public function loadTemplate(){
        $views = DIR . '/public/template';
        $cache = DIR . '/public/template/compiles';

        $this->blade = new BladeOne($views, $cache, BladeOne::MODE_AUTO);
    }
}