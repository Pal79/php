<?php

class person{
    var $fName;
    var $lName;
    var $age;

    function __construct()
    {
    }

    public function salute() {
        echo "Üdvözlöm " . $this->fName . ".<br>";
    }
}

$person1 = new person();
$person1->lName = "Teszt";
$person1->fName = "Elek";
$person1->age = 40;

$person2 = new person();
$person2->lName = "Boldog";
$person2->fName = "Jakab";
$person2->age = 30;

$person1->salute();
$person2->salute();

?>