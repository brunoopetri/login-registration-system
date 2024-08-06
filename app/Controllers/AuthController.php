<?php

namespace app\Controllers;

use app\Models\User;
use app\library\Authenticate;
use app\library\GoogleClient;
use app\core\BaseController;

class AuthController extends BaseController
{
    public function login()
    {
        $this->view('login');
    }

    public function register()
    {
        $this->view('register');
    }

    public function handleGoogleLogin()
    {
        $googleClient = new GoogleClient();
        $googleClient->init();

        if ($googleClient->authorized()) {
            $auth = new Authenticate();
            $auth->authGoogle($googleClient->getData());
            $this->redirect('/dashboard');
        }

        // Caso a autenticação falhe, redireciona de volta para a página inicial
        $this->setSessionMessage('Autenticação do Google falhou!', 'error');
        $this->redirect('/');
    }

    public function handleConventionalLogin()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            $password = $_POST['password'];

            // Salva os dados do formulário na sessão
            $_SESSION['form_data'] = [
                'email' => $email,
                'password' => $password
            ];

            // Valida o formato do email
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $this->setSessionMessage('Endereço de e-mail inválido.', 'error');
                $this->redirect('/login');
            }

            // Verifica se o email está registrado
            $user = (new User())->findBy('email', $email);
            if (!$user) {
                $this->setSessionMessage('Usuário não encontrado.', 'error');
                $this->redirect('/login');
            }

            // Verifica a senha
            if (!password_verify($password, $user->password)) {
                $this->setSessionMessage('Senha incorreta.', 'error');
                $this->redirect('/login');
            }

            // Autentica o usuário
            $_SESSION['user'] = $user;
            $_SESSION['auth'] = true;

            $this->setSessionMessage('Login bem-sucedido! Redirecionando para o dashboard...', 'success', true);
            $this->redirect('/login');
        } else {
            $this->view('login');
        }
    }

    public function handleRegister()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Sanitiza os dados recebidos do formulário
            $name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            $password = $_POST['password'];
            $confirmPassword = $_POST['confirmPassword'];

            // Salva os dados do formulário na sessão
            $_SESSION['form_data'] = [
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'confirmPassword' => $confirmPassword
        ];

            // Valida os dados
            if (empty($name)) {
                $this->setSessionMessage('Nome é obrigatório.', 'error');
                $this->redirect('/register');
            }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $this->setSessionMessage('Endereço de e-mail inválido.', 'error');
                $this->redirect('/register');
            }

            if (strlen($password) < 6) {
                $this->setSessionMessage('A senha deve ter pelo menos 6 caracteres.', 'error');
                $this->redirect('/register');
            }

            if ($password !== $confirmPassword) {
                $this->setSessionMessage('As senhas não coincidem.', 'error');
                $this->redirect('/register');
            }

            // Verifica se o email já está registrado
            $existingUser = (new User())->findBy('email', $email);
            if ($existingUser) {
                $this->setSessionMessage('E-mail já está cadastrado. Redirecionando para login...', 'error', true);
                $this->redirect('/register');
            }

            // Hasheia a senha antes de salvar
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

            // Cria um novo usuário
            $user = new User();
            $result = $user->insert([
                'name' => $name,
                'email' => $email,
                'password' => $hashedPassword
            ]);

            // Verifique se a inserção foi bem-sucedida
            if ($result) {
                $this->setSessionMessage('Usuário registrado com sucesso! Redirecionando para login...', 'success', true);
                $this->redirect('/register');
            } else {
                $this->setSessionMessage('Erro ao registrar usuário. Por favor, tente novamente.', 'error');
                $this->redirect('/register');
            }
        } else {
            $this->view('register');
        }
    }

    public function logout()
    {
        $auth = new Authenticate();
        $auth->logout();
        $this->redirect('/login');
    }
}
