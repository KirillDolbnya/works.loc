<?php

class QueryBuildre {

    protected $pdo;
    public function __construct($pdo)
    {
        $this->pdo=$pdo;
    }

    public function getAll ($table){
        $sql = "SELECT * FROM {$table}";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create(){
        $sql = "INSERT INTO posts (title) VALUES ('bruh')";
        $statement=$this->pdo->query($sql);
        var_dump($statement);
    }
}