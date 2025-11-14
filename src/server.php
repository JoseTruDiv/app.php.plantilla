<?php 

require_once __DIR__.'/Router/Router.php';

$url = $_SERVER['REQUEST_URI'];

$router = new Router();

$router->redirect($url);



