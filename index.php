<?php
define('DIR', __DIR__);

require DIR . '/vendor/autoload.php'; //Auto cargador de composer
require_once (DIR . '/autoload.php'); //Auto cargador de clases
require_once (DIR . '/src/Config.php');

use src\Routes\Router;

$router = new Router();
$router->run();