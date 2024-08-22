<?php

namespace App\Controllers;

use Core\Controller;
use GuzzleHttp\Client;

class AuthController extends Controller {
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Fazer requisição para a API de autenticação
            $client = new Client([
                'base_uri' => getenv('API_HOST'),
            ]);

            $response = $client->post('/user/auth', [
                'headers' => [
                    'Authorization' => getenv('API_TOKEN'),
                ],
                'json' => [
                    'email' => $email,
                    'password' => $password,
                ],
            ]);

            $data = json_decode($response->getBody(), true);

            if ($response->getStatusCode() == 200 && isset($data['token'])) {
                // Salva o token na sessão
                $_SESSION['token'] = $data['token'];

                // Redireciona para a página de perfil
                header('Location: /profile');
                exit;
            } else {
                $this->view('auth/auth', ['error' => 'Login inválido']);
            }
        } else {
            $this->view('auth/auth');
        }
    }
}
