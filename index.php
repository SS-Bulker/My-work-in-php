<?php

require_once 'Vendor/autoload.php';
require_once 'App/Controllers/BaseController.php';
require_once 'App/Controllers/ViewController.php';
require_once 'App/Config/Database.php';
require_once 'App/Models/Users.php';


use App\Controllers\ViewController;
use App\Models\Users;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$usuarios = Users::where('id', 2)->get();

dd($usuarios[0]->name);

/*
$obtenerPlantilla = new ViewController();
$obtenerPlantilla->viewController();

*/