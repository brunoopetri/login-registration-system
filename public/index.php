<?php
session_start();

require '../vendor/autoload.php';

use app\Controllers\AuthController;
use app\Controllers\HomeController;
use app\Controllers\DashboardController;


$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($uri) {
    case '/':
        $controller = new HomeController();
        $controller->index();
        break;
    case '/login':
        $controller = new AuthController();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->handleConventionalLogin();
        } else {
            $controller->login();
        }
        break;
    case '/register':
        $controller = new AuthController();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->handleRegister();
        } else {
            $controller->register();
        }
        break;
    case '/logout':
        $controller = new AuthController();
        $controller->logout();
        break;
    case '/dashboard':
        $controller = new DashboardController();
        $controller->index();
        break;
    case '/auth/google/callback':
        $controller = new AuthController();
        $controller->handleGoogleLogin();
        break;
    default:
        http_response_code(404);
        echo "Página não encontrada";
        break;
}
