<?php

$database = require 'core/bootstrap.php';
$router = new Router;
$router = Router::load('routes.php');
require $router->direct(Request::uri());
