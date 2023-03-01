<?php

class User
{
    private $db;

    public function __construct(){
        $this->db = Database::Instance();
    }

    public function create($fields = []){
        $this->db->insert('users' , $fields);
    }
}