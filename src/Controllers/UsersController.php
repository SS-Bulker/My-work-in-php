<?php

namespace src\Controllers;

use src\Controllers\Controller;

class UsersController extends Controller{
    
    public function __construct(){
        parent::__construct();
    }

    public function home(){
        echo $this->blade->run("users", array("variable1" => "value1"));
    }

}