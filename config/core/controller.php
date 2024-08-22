<?php

namespace Core;

class Controller {
    public function view($view, $data = []) {
        extract($data);
        $viewPath = realpath(__DIR__ . "/../../app/views/{$view}.php");
        if (file_exists($viewPath)) {
            require_once $viewPath;
        } else {
            echo "View not found: {$viewPath}";
        }
    }
}
