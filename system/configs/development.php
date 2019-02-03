<?php
return [
    'php' => [
        'display_error' => 1,
        'error_reporting' => -1, // show all errors
        'max_execution_time' => 10,
        'default_charset' => 'UTF-8',
        'assert.active' => 1,
        //'zend.assertions' => 1,
        'memory_limit' => '128M',
        'date.timezone' => 'UTC',
    ],
    'db' => [
        'type' => 'sqlite::memory',
        'user' => '',
        'pass' => '',
    ],
    // 'db' => [
    //     'type' => 'pgsql',
    //     'user' => 'postgres',
    //     'pass' => 'postgres',
    //     'params' => [
    //         'host' => 'localhost',
    //         'port' => 5432,
    //         'dbname' => 'postgres' 
    //     ]
    // ],
];
