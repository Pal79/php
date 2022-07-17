<?php

$msg = "";

if(isset($_GET["last_name"]) && isset($_GET["first_name"])) {
    if(!empty($_GET["first_name"]) && !empty($_GET["last_name"])) {
        $lName = $_GET["last_name"];
        $fName = $_GET["first_name"];

        echo $lName . " " . $fName;
    } else {
        $msg = "Minden mezőt ki kell tölteni!!!";
        echo $msg;
    }
}

?>