<?php

namespace app\core;

class BaseController
{
    /**
     * Carrega uma view e passa dados para ela.
     *
     * @param string $view O nome da view a ser carregada.
     * @param array $data Os dados a serem passados para a view.
     */
    protected function view(string $view, array $data = [])
    {
        extract($data);
        require_once "../app/Views/auth/{$view}.php";
    }

    /**
     * Define uma mensagem de sessão.
     *
     * @param string $message A mensagem a ser definida.
     * @param string $type O tipo da mensagem ('success', 'error').
     * @param bool $redirect Sinaliza se deve redirecionar após definir a mensagem.
     */
    protected function setSessionMessage(string $message, string $type, bool $redirect = false)
    {
        $_SESSION['message'] = $message;
        $_SESSION['message_type'] = $type;
        if ($redirect) {
            $_SESSION['redirect'] = true;
        }
    }

    /**
     * Redireciona para uma URL especificada.
     *
     * @param string $url A URL para redirecionar.
     */
    protected function redirect(string $url)
    {
        header("Location: $url");
        exit();
    }
}

