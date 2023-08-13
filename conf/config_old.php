<?php

return array(
    'base_url' => 'https://__DOMAIN____PATH__',
    'db' => array (
        'connection' => 'mysql',
        'dsn' => 'host=localhost;port=3306;dbname=__DB_USER__',
        'username' => '__DB_USER__',
        'password' => '__DB_PWD__',
    ),

    'storage'  => array(
        'driver' => 'local',
        'path'   => '__DATA_DIR__',
    ),

    'ldap' => array(
        'enabled' => true,
        'host' => 'ldap://127.0.0.1',
        'port' => 389,
        'base_domain' => 'dc=yunohost,dc=org',
        'user_domain' => 'ou=Users',
        'rdn_attribute' => 'uid=',
    ),
);

