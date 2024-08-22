<?php
namespace App\Controllers;

use Core\Controller;
use GuzzleHttp\Client;

class ProfileController extends Controller
{
    public function show()
    {
        if (!isset($_SESSION['token'])) {
            header('Location: /login');
            exit;
        }

        $client = new Client([
            'base_uri' => getenv('API_HOST'),
        ]);

        $response = $client->get('/user/profile', [
            'headers' => [
                'Authorization' => $_SESSION['token'],
            ],
        ]);

        $user = json_decode($response->getBody(), true);
        $this->view('profile/profile', ['user' => $user]);
    }
}
