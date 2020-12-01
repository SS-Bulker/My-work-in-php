<?php

require_once 'Vendor/autoload.php';
require_once 'App/Controllers/BaseController.php';
require_once 'App/Controllers/ViewController.php';


use App\Controllers\ViewController;
use App\Models\Users;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


$obtenerPlantilla = new ViewController();
$obtenerPlantilla->viewController();
