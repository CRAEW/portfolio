<?php

return [
    'database' => [
        'name' => 'wendyvancraen.be',
        'username' => 'root',
        'password' => '09wendy82',
        'connection' => 'mysql:host=www.wendyvancraen.portfolio.be',
        'options' => [
            // If the connections throws an error, display exceptions
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];