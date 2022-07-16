<?php

class Person {
    public $firstName;
    public $lastName;
    public $age;

    private $hairColor = "barna";

    function __construct($fName,$lName){
        $this->firstName = $fName;
        $this->lastName = $lName;
    }

    public function Salute() {
        $this->echoData();//csak itt az osztályon belül hívható meg
    }

    private function echoData() {
        echo "Vezetéknév: " . $this->lastName . ".<br>";
        echo "Keresztnév: " . $this->firstName . ".<br>";
        echo "Hajszín: " . $this->hairColor . ".<br>";
    }

    function  __destruct() {
        $age = NULL;
    }
}

$person = new Person("Elek","Teszt");
$person->age = 40;
//$person->hairColor = "Kék";//innen nem lehet hozzáférni
$person->Salute();

?>