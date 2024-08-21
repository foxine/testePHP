<?php
namespace Core;

class Router
{
    public function handleRequest()
    {
        $uri = $_SERVER['REQUEST_URI'];

        if ($uri == '/login') {
            (new \App\Controllers\AuthController())->login();
        } elseif ($uri == '/profile') {
            (new \app\controllers\profileController())->show();
        } elseif ($uri == '/transactions') {
            (new \App\Controllers\TransactionController())->list();
        } else {
            echo "Página não encontrada";
        }
    }
}
