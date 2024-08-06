<?php

namespace app\Controllers;

class DashboardController
{
    public function index()
    {
        if (!isset($_SESSION['auth']) || !$_SESSION['auth']) {
            header('Location: /home');
            exit();
        }
        
        $name = $_SESSION['user']->name;
        require_once '../app/Views/auth/dashboard.php';
    }
}
