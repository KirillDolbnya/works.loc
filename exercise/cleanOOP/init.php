<?php
session_start();

include_once('class/config.php');
include_once('class/database.php');
include_once('class/input.php');
include_once('class/validate.php');
include_once('class/session.php');
include_once('class/token.php');
include_once('class/user.php');
include_once('class/redirect.php');
include_once('class/cookie.php');

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
    ],
    'cookie' => [
        'cookie_name' => 'hash',
        'cookie_expiry' => 604800,
    ]
];

if (Cookie::exists(Config::get('cookie.cookie_name')) && !Session::exists(Config::get('session.user_session'))){
    $hash = Cookie::get(Config::get('cookie.cookie_name'));
    $hashCheck = Database::Instance()->get('user_sessions',['hash', '=' , $hash]);

    if ($hashCheck->count()){
        $user = new User($hashCheck->first()['user_id']);
        $user->login();
    }
}
