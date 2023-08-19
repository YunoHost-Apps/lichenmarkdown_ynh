<?php

return [
    'app_name' => 'XBackBone',
    'base_url' => 'https://__DOMAIN____PATH__',
    'storage' => [
        'driver' => 'local',
        'path'   => '__DATA_DIR__',
    ],
    'db'       => [
        'connection' => 'sqlite',
        'dsn'        => '__INSTALL_DIR__/resources/database/xbackbone.db',
        'username'   => null,
        'password'   => null,
    ]
];
