<?php

$hello = "Hello World!!!";

echo "strlen - " . $hello . ": " . strlen($hello) . " - string karakterek száma<hr>";//string karakterek száma

echo "str_word_count - " . $hello . ": " . str_word_count($hello) . " - hány szóból áll<hr>";//hány szóból áll

echo "strrev - " . $hello . ": " . strrev($hello) . " - visszafele írja ki<hr>";//visszafele írja ki (pl.: palindromoknál)

echo "strpos(String, keresett) - " . $hello . ": " . strpos($hello, "World") . " - hányadik indexnél kezdődik az adott elem<hr>";//hányadik indexnél kezdődik az adott elem

echo "str_replace(mit, mire, miben) - " . $hello . " -> Ave World!!!: " . str_replace("Hello", "Ave", $hello) . " - lecseréli az adott elemet a megadottra<hr>";//lecseréli az adott elemet a megadottra

echo "str_shuffle - " . $hello . ": " . str_shuffle($hello) . " - összekeveri a megadott elemeket<hr>";//összekeveri a megadott elemeket (pl. jelszavak generálásánál)

echo "substr(miben, mettől, meddig) - " . $hello . ": " . substr($hello, 1, 4) . " - adott számú elemet ad vissza<hr>";//adott számú elemet ad vissza

$var1 = "szipi szupi jó minden";
$var2 = "elég szuper minden";
similar_text($var1, $var2, $result);
echo "similar_text(param1, param2, eredmény): " . $result . " - az adott adatok hány százalékban egyeznek<hr>";//az adott adatok hány százalékban egyeznek

echo "strtolower - " . $hello . ": " . strtolower($hello) . " - csak kisbetűs kiírás<hr>";//csak kisbetűs kiírás

echo "strtoupper - " . $hello . ": " . strtoupper($hello) . " - csak nagybetűs kiírás<hr>";//csak nagybetűs kiírás

?>