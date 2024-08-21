<?php
namespace App\Controllers;

class TransactionController extends Controller
{
    public function list()
    {
        $token = $_SESSION['token'];

        $transactions = $this->apiRequest('/transaction/list', 'GET', [], $token);

        require_once __DIR__ . '/../Views/transactions.php';
    }
}
