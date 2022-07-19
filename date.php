<?php

echo "Dátum kiírás:<br>";

echo date("y-m-d") . "<br>";
echo date("y-m-l") . "<br>";
echo date("Y-M-D") . "<br>";

echo "<hr>";

echo "Idő kiírás:<br>";
echo date("h:i:sa") . " - 12 órás<br>";
echo date("H:i:s") . " - 24 órás";

echo "<hr>";

date_default_timezone_set("America/New_York");
echo date("Y-M-D h:i:sa") . " New York";

echo "<br>";

setlocale(LC_ALL, "ja_JP.utf8"); 
$date_format = "%Y年%B%e日(%a)";                  

$date_string = strftime($date_format, time());

echo $date_string;



?>