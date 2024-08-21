<?php
namespace App\Controllers;

class AuthController extends Controller
{
    public function login()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $response = $this->apiRequest('/user/auth', 'POST', [
            'email' => $email,
            'password' => $password,
        ]);

        if ($response && $response->token) {
            $_SESSION['token'] = $response->token;
            header('Location: /profile');
        } else {
            echo "Login falhou";
        }
    }
}
