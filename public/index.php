<?php

require __DIR__ . '/../vendor/autoload.php';

use ImEx\Core\Router as Router;
use ImEx\Http\Controllers as Controllers;

$router = new Router();

//Home 
$router->add('/', [new Controllers\BaseController, 'index']);
 
$router->run();