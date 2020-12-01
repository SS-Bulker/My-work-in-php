<?php

use Illuminate\Database\Capsule\Manager as Database;

$database = new Database();

$database->addConnection([
    'driver'=>'mysql',
    'host'=>env('DB_HOST') ?: 'localhost',
    'database'=>env('DB_NAME') ?: 'php_pruebas',
    'username'=>env('DB_USER') ?: 'root',
    'password'=>env('DB_PASS') ?: '',
    'charset'=>'utf8',
    'prefix'=>''
]);

$database->setAsGlobal();
$database->bootEloquent();