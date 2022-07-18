<?php

$nameErr=$userNameErr=$emailErr=$passwordErr=$progLangsErr="";

if(isset($_POST["name"]) && !empty($_POST["name"])) {
    $name = $_POST["name"];
} else {

}
if(isset($_POST["userName"]) && !empty($_POST["userName"])) {
    $userName = $_POST["userName"];
} else {

}
if(isset($_POST["email"]) && !empty($_POST["email"])) {
    $email = $_POST["email"];
} else {

}
if(isset($_POST["password"]) && !empty($_POST["password"])) {
    $password = $_POST["password"];
} else {

}
if(isset($_POST["progLangs"]) && !empty($_POST["progLangs"])) {
    $progLangs = $_POST["progLangs"];
} else {

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

require_once("login.php");

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