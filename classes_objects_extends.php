<?php

class Szulo {
    public $firstName;
    public $lastName;
    public $age;
    protected $eyeColor = "Zöld";

    function __construct() {
        echo "Szülő kunstruktor <br>";
    }

    public function wirteOut() {
        echo $this->age . " éves<br>";
        echo "Szemszín: " . $this->eyeColor . "<br>";
    }

    function __destruct() {
        echo "Szülő osztály vége <br>";
    }
}

class Gyermek extends Szulo {
    function __construct() {
        parent::__construct();
        echo "Gyermek konstruktor <br>";
        $this->eyeColor = "Barna";
    }

    function __destruct() {
        echo "Gyermek osztály vége <br>";
    }
}

$szulo = new Szulo();
$gyermek = new Gyermek();
$gyermek->age = "17";
$gyermek->wirteOut();


?>