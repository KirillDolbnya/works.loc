<?php

class person {
    public $name;
    public $age;


    public function sayHello(){
        $result = 'Привет меня зовут '.$this->name.' мне '.$this->age.' лет';
        return $result;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function setAge($age){
        $this->age = $age;
    }


}

$user = new person;

$user->setName('Kirill');

$user->name;

$user->setAge(18);

$user->age;

echo $user->sayHello();
?>