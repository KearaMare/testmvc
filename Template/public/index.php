<?php

session_start();

require '../src/config/config.php';
require '../vendor/autoload.php';
require SRC . 'helper.php';

$router = new Template\Router($_SERVER["REQUEST_URI"]);

// Get Routes
$router->get('/', "PokedexController@getAll");

// Post Routes
// $router->post('/', "ControllerTemplate@postMethod");

$router->run();
