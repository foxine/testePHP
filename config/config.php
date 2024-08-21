<?php
require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

return [
   #'api_host' => 'https://southti.com.br/desafio-front-end',
   #'api_token' => '8A9B362F-E744-4BEE-8031-39A23FA67E63',

    'app_env' => $_ENV['APP_ENV'],
    'api_host' => $_ENV['API_HOST'],
    'api_token' => $_ENV['API_TOKEN'],
];
