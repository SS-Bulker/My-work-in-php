<?php

use src\Routes\Router;

define('DIR', __DIR__);

require DIR . '/vendor/autoload.php';

require_once (DIR . '/src/Config.php');
require_once (DIR . '/src/Routes/Router.php');

$router = new Router();
$router->run();
