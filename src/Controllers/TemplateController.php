<?php 

namespace src\Controllers;

use src\Controllers\Controller;

class TemplateController extends Controller{

    public function __construct(){
        parent::__construct();
    }

    public function home(){
        echo $this->blade->run("template", array("variable1" => "value1"));
    }

}
