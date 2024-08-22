<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Core\Router;

// Carregar as configurações
$config = require_once __DIR__ . '/../config/config.php';

// Instanciar o roteador
$router = new Router();

// Definir as rotas
$router->add('/', function() {
    $controller = new \App\Controllers\authController();
    $controller->login();
});

// Adicionar outras rotas aqui...

// Despachar a rota solicitada
$router->dispatch(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
