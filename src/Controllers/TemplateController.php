<?php 

namespace src\Controllers;

use src\Controllers\Controller;
use src\Models\TemplateModel;

class TemplateController extends Controller{

    protected $TemplateModel;

    public function __construct(){
        parent::__construct();

        $this->TemplateModel = new TemplateModel();
    }

    public function home(){
        echo $this->blade->run("template");
        exit();
    }

}
