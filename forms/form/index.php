<?php

require_once("register.php");

$nameErr = "";
$userNameErr = "";
$emailErr = "";
$passwordErr = "";
$progLangsErr = "";

function stringTest($string) {
    $string = trim($string);
    $string = strip_tags($string);
    $string = stripslashes($string);
    return $string;
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["name"]) && !empty($_POST["name"]) && $_POST["name"] == stringTest($_POST["name"]) && preg_match("/^[a-zA-ZáéíóöőúüűÁÉÍÓÖŐÚÜŰ\s]$/u") && strlen($_POST["name"]) <= 40) {
        $name = $_POST["name"];
    } else {
        $userNameErr = "Hibás név!!!";
    }
    if(isset($_POST["userName"]) && !empty($_POST["userName"]) && $_POST["name"] == stringTest($_POST["name"]) && preg_match("/^[a-zA-Z]*$/") && strlen($_POST["name"] <= 40)) {
        $userName = $_POST["userName"];
    } else {
        $userNameErr = "Hibás felhasználónév!!!";
    }
    if(isset($_POST["email"]) && filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)) {
        $email = $_POST["email"];
    } else {
        $emailErr = "Helytelen email cím!!!";
    }
    if(isset($_POST["password"]) && !empty($_POST["password"]) && $_POST["password"] == stringTest($_POST["password"]) && strlen($_POST["password"] <= 40) && strlen($_POST["password"]) > 10) {
        $password = $_POST["password"];
    } else {
        $passwordErr = "Hibás jelszó!!!";
    }
    if(isset($_POST["progLangs"]) && !empty($_POST["progLangs"])) {
        $progLangs = $_POST["progLangs"];
    } else {
        $progLangsErr = "Legalább egy nyelvet ki kell jelölnöd!!!";
    }
    if(isset($_POST["forMySelf"])) {
        $forMySelf = $_POST["forMySelf"];
    }
    if(isset($_POST["gender"])) {
        $gender = $_POST["gender"];
    }
    if(isset($_POST["pets"])) {
        $pets = $_POST["pets"];
    }
    if(isset($_POST["progLangs"])) {
        $progLangs = $_POST["progLangs"];
    }
}

if(isset($name) && isset($userName) && isset($email) && isset($password) && isset($progLangs)){
    echo "Név: " . $name . "<br>";
    echo "Felhasználó név: " . $userName . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Jelszó: " . $password . "<br>";
    foreach($progLangs as $p) {
        echo $p . "<br>";
    }
    echo "Magamról: " . $forMySelf . "<br>";
    echo "Nemed: " . $gender . "<br>";
    echo "Háziállat: ";
    foreach($pets as $pet) {
        echo $pet . "<br>";
    }
    echo "Tanult programnyelvek: ";
    foreach ($progLangs as $lang) {
        echo $lang . "<br>";
    }
}

?>