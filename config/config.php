<?php


//user params
$params = [
    'user' => [
        'login' => '',
        'password' => ''
    ],

    'database' => [
        'host' => '',
        'dbname' => '',
        'user' => '',
        'password' => ''
    ]
];

$page = $_GET['page'];
//$getarray = $_GET['param'];

$rout = [
    'main', 'private', 'auth', '', 'ban', 'log'
];
