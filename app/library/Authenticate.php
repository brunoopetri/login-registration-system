<?php

namespace app\library;

use app\Models\User;

class Authenticate
{
    public function authGoogle($data)
    {
        $user = new User;
        $userFound = $user->findBy('email', $data->email);
        if (!$userFound) {
            $user->insert([
                'name' => $data->name,
                'email' => $data->email,
                'password' => ''
            ]);
            $userFound = $user->findBy('email', $data->email);
        }
        
        $_SESSION['user'] = $userFound;
        $_SESSION['auth'] = true;
        header('Location: /dashboard');
        exit();
    }

    public function authConventional($email, $password)
    {
        $user = new User;
        $userFound = $user->findBy('email', $email);
        if ($userFound && password_verify($password, $userFound->password)) {
            $_SESSION['user'] = $userFound;
            $_SESSION['auth'] = true;
            header('Location: /dashboard');
            exit();
        }

        // Adicione lógica de mensagem de erro aqui
    }

    public function logout()
    {
        unset($_SESSION['user'], $_SESSION['auth']);
        header('Location:/');
        exit();
    }
}