<?php

include("contents/header.html");//ha hibára fut, kiír egy hibakódot és az oldal többi része betöltődik
require("contents/header.html");//ha hibára fut, a teljes oldal futását leállítja és visszatér egy hibakóddal

/*
csak egyszer szúrják be az adott fájlt
*/
include_once("contents/header.html");
require_once("contents/header.html");

?>