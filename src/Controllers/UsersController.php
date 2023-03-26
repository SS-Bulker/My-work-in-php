<?php

namespace src\Controllers;

use src\Controllers\Controller;
use src\Models\UsersModel;

class UsersController extends Controller{

    protected $UsersModel;
    
    public function __construct(){
        parent::__construct();

        $this->UsersModel = new UsersModel();

    }

    public function home(){
        $data = $this->UsersModel->consultarUsuarios();

        echo $this->blade->run("users", array("usuarios" => $data));
        exit();
    }

}