<?php
session_start();

include_once ('class/config.php');
include_once ('class/database.php');
include_once ('class/input.php');
include_once ('class/validate.php');
include_once ('class/session.php');
include_once ('class/token.php');
include_once ('class/user.php');
include_once ('class/redirect.php');

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
