<?php

class person {
    public $name;
    public $age;

    const ID = 10;


    public function __construct($name,$age){
        $this->name = $name;
        $this->age = $age.'<br>';
    }

    public function sayHello(){
        $result = 'Привет меня зовут '.$this->name.' мне '.$this->age.' лет'.' '.$this->sayAge();
        return $result;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function setAge($age){
        $this->age = $age;
    }   

    public function sayAge(){
        return $this->age;
    }

    public static function staticFunction(){
        echo 'i am static function'.'<br>';
    }


}

$user = new person('Kirill' , 18);

$user2 = new person('Tagir', 19);

echo $user->name;
echo $user->age;

echo $user2->name;
echo $user2->age;

echo $user::ID.'<br>';

person::staticFunction();

//$user->setName('Kirill');
//
//$user2->setName('Tagit');
//
//$user->setAge(18);
//
//$user2->setAge(19);
//
//echo $user->sayHello().'<br>';
//
//echo $user2->sayHello();


class university {

    public function student(person $students){
        echo $students->name;
    }
}


$students = new person('Kirill' , 18);

$univer = new university();

$univer->student($students);

?>