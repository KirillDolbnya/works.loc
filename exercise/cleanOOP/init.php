<?php
session_start();

include_once ('class/Config.php');
include_once ('class/Database.php');
include_once ('class/Input.php');
include_once ('class/Validate.php');
include_once ('class/Session.php');
include_once ('class/Token.php');
include_once ('class/User.php');
include_once ('class/Redirect.php');

$GLOBALS['config'] = [
    'mysql' => [
        'host' => 'localhost',
        'username' => 'root',
        'password' => '',
        'dbname' => 'marlinOOP',
        'something' => [
            'no' => [
                'foo' => [
                    'bar' => 'baz',
                ],
            ],
        ],
    ],
    'session' => [
        'token_name' => 'token',
        'user_session' => 'user',
    ]
];
