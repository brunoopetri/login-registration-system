<?php

namespace app\Controllers;

use app\library\GoogleClient;

class HomeController
{
    public function index()
    {
        $googleClient = new GoogleClient;
        $googleClient->init();
        $authUrl = $googleClient->generateAuthLink();

        require '../app/Views/auth/home.php';
    }
}
