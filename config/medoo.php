<?php
return [
    'database_type' => env('DB_CONNECTION', 'mysql'),
    'database_name' => env('DB_DATABASE', 'test'),
    'server' => env('DB_HOST', '127.0.0.1'),
    'username' => env('DB_USERNAME', 'root'),
    'password' => env('DB_PASSWORD', ''),
    'charset' => 'utf8mb4'
];
?>
