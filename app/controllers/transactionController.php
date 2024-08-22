<?php
namespace App\Controllers;

use Core\Controller;
use GuzzleHttp\Client;

class TransactionController extends Controller
{
    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['token'])) {
            $client = new Client([
                'base_uri' => getenv('API_HOST'),
            ]);

            $response = $client->post('/transaction/create', [
                'headers' => [
                    'Authorization' => $_SESSION['token'],
                ],
                'json' => [
                    'value' => $_POST['value'],
                    'description' => $_POST['description'],
                ],
            ]);

            $data = json_decode($response->getBody(), true);
            $this->view('transaction/transactions', ['transactionId' => $data['id']]);
        } else {
            $this->view('transaction/transactions');
        }
    }

    public function list()
    {
        if (isset($_SESSION['token'])) {
            $client = new Client([
                'base_uri' => getenv('API_HOST'),
            ]);

            $response = $client->get('/transaction/list', [
                'headers' => [
                    'Authorization' => $_SESSION['token'],
                ],
            ]);

            $transactions = json_decode($response->getBody(), true);
            $this->view('transaction/transactions', ['transactions' => $transactions]);
        } else {
            header('Location: /login');
            exit;
        }
    }
}
