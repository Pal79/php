<?php

class Person {
    public static $firstName;
    public static $lastName;
    public static $age;
    public static $hairColor = "barna";
    public static $eyeColor = "Kék";

    function __construct($fName,$lName){
        $this->firstName = $fName;
        $this->lastName = $lName;
    }

    public static function Salute() {
        echo "Vezetéknév: " . self::$lastName . ".<br>";
        echo "Keresztnév: " . self::$firstName . ".<br>";
        echo "Hajszín: " . self::$hairColor . ".<br>";
        echo "Szemszín: " . self::$eyeColor . ".<br>";
    }

    function  __destruct() {
        $age = NULL;
    }
}

//$person->eyeColor = "Barna";//ha this kulcsszóval hivatkozok az osztályon belül
Person::$eyeColor = "Barna";//alapbeállítás megváltoztatása
Person::$lastName = "Teszt";
Person::$firstName = "Elek";

Person::Salute();

?>