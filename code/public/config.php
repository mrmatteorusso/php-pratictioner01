<?php

return [
    'database' => [
        'name' => 'mysqlphpex01',
        'username' => 'root',
        'password' => 'password',
        'connection' => 'mysql:host=mysqlphpex01',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];
