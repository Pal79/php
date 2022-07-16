<?php

class Person {
    const firstName = "Elek";//osztályon belül és kívűl sem lehet megváltoztatni az értékét
    const lastName = "Teszt";
    const age = 40;
    const hairColor = "Barna";
    const eyeColor = "Zöld";

    function __construct() {
    }

    public function Salute() {
        echo "Vezetéknév: " . self::lastName . ".<br>";
        echo "Keresztnév: " . self::firstName . ".<br>";
        echo "Év: " . self::age . " éves.<br>";
        echo "Hajszín: " . self::hairColor . ".<br>";
        echo "Szemszín: " . self::eyeColor . ".<br>";
    }

    function  __destruct() {
    }
}

$person = new Person();
$person->Salute();

?>