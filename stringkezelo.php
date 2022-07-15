<?php

$hello = "Hello World!!!";

echo "strlen - " . $hello . ": " . strlen($hello) . " - string karakterek száma<hr>";//string karakterek száma

echo "str_word_count - " . $hello . ": " . str_word_count($hello) . " - hány szóból áll<hr>";//hány szóból áll

echo "strrev - " . $hello . ": " . strrev($hello) . " - visszafele írja ki<hr>";//visszafele írja ki (pl.: palindromoknál)

echo "strpos - " . $hello . ": " . strpos($hello, "World") . " - hányadik indexnél kezdődik az adott elem<hr>";//hányadik indexnél kezdődik az adott elem

?>