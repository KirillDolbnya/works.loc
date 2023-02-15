<?php

class Connection{
    public static function make($config){
        $pdo = new PDO ("{$config['host']};dbname={$config['dbname']}",$config['user'],$config['password']);
        return $pdo;
    }
}