<?php

include_once('../class/config.php');
include_once('../class/database.php');
include_once('../class/input.php');
include_once('../class/validate.php');
include_once('../class/session.php');
include_once('../class/token.php');
include_once ('../class/user.php');
include_once ('../class/redirect.php');

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
    ]
];

if (Input::exists()) {
    if (Token::check(Input::get('token'))) {
        $validate = new Validate();

        $validation = $validate->check($_POST, [
            'username' => [
                'required' => true,
                'min' => 2,
                'max' => 15,
                'unique' => 'users',
            ],
            'email' => [
                'required' => true,
                'email' => true,
                'unique' => 'users',
            ],
            'password' => [
                'required' => true,
                'min' => 3,
            ],
            'repeat_password' => [
                'required' => true,
                'mathes' => 'password',
            ]
        ]);

        if ($validation->passed()) {
            $user = new User();

            $user->create([
                'username' => Input::get('username'),
                'password' => password_hash(Input::get('password') , PASSWORD_DEFAULT),
                'email' => Input::get('email')
            ]);
            Session::flash('success', 'register success');
//            Redirect::to('test.php');
//            Redirect::to(404);
        } else {
            foreach ($validation->errors() as $error) {
                echo $error . '<br>';
            }
        }
    }
}