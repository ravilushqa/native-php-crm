<?php

return [
    'database' => [
        'name' => 'homestead',
        'username' => 'homestead',
        'password' => 'secret',
        'connection' => 'mysql:host=192.168.254.204',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];