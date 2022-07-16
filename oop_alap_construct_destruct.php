<?php

class Person {
    var $firstName;
    var $lastName;
    var $age;

    function __construct($fName,$lName){
        $this->firstName = $fName;
        $this->lastName = $lName;
    }

    public function Salute() {
        echo "Üdvözlöm önt " . $this->firstName . ".<br>";
    }

    function  __destruct() {
        echo "A program lefutott!";
    }
}

$person = new Person("Elek","Teszt");
$person->age = 40;

$person->Salute();

?>