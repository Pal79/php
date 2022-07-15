<?php

$abs = -5;
echo "abs -5 = " . abs($abs) . " - abszolút érték<hr>";//abszolút érték

$round = 7.5;
echo "round 7.5: " . round($round) . " - kerekítés<hr>";//kerekítés

$floor = 5.78;
echo "floor 5.78: " . floor($floor) . " - levágja a tört részeket<hr>";//levágja a tört részeket

$ceil = 5.78;
echo "ceil 5.78: " . ceil($ceil) . " - felfelé kerekítés<hr>";//felfelé kerekítés

$sqrt = 25;
echo "sqrt 25: " . sqrt($sqrt) . " - gyökvonás<hr>";//gyökvonás

$pi = pi();
echo "pi: " . $pi . " - pi<hr>";//pi

echo "pow 5, 2: " . pow(5,2) . " - négyzetre emelés<hr>";//négyzetre emelés

$max = array(15,4,9,95,3,-5,78);
echo "max 15, 4, 9, 95, 3, -5, 78: " . max($max) . " - legnagyobb érték<hr>";//legnagyobb érték

$min = array(15,4,9,95,3,-5,78);
echo "min 15, 4, 9, 95, 3, -5, 78: " . min($min) . " - legkisebb érték<hr>";//legkisebb érték

echo "sin 0.5: " . sin(0.5) . " - szinusz<hr>";//szinusz

echo "cos 0.5: " . cos(0.5) . " - koszinusz<hr>";//koszinusz

echo "tan 0.5: " . tan(0.5) . " - tangens<hr>";//tangens

echo "1/tan 0.5: " . 1/tan(0.5) . " - kotangens<hr>";//kotangens

echo "log 100: " . log(100) . " - logaritmus<hr>";//logaritmus

echo "log10 100: " . log10(100) . " - tízes alapú logaritmus<hr>";//tízes alapú logaritmus

$isfin1 = 2;//létezik
$isfin2 = log10(0);//nem létezik
echo "is_finite: ";//eldönti egy számról, hogy létezik e
if(is_finite($isfin1)) {
    echo "létezik<hr>";
} else {
    echo "nem létezik<hr>";
}

$isinfin = log10(0);//nem létezik
echo "is_infinite: ";//negálja az értéket
if(is_finite($isinfin)) {
    echo "nem létezik<hr>";
} else {
    echo "létezik<hr>";
}

echo "dechex 123456: " . dechex(123456) . " - decimálisból hexadecimálisba váltás<hr>";//decimálisból hexadecimálisba váltás

echo "hexdec fff123: " . hexdec("fff123") . " - hexadecimálisból decimálisba váltás<hr>";//hexadecimálisból decimálisba váltás

echo "decoct 123: " . decoct("123") . " - decimálisból oktálisba váltás<hr>";//decimálisból oktálisba váltás

echo "octdec 123: " . octdec(123) . " - oktálisból decimálisba váltás<hr>";//oktálisból decimálisba váltás

echo "decbin 125: " . decbin(125) . " - decimálisból binárisra váltás<hr>";//decimálisból binárisra váltás

echo "bindec 11011011: " . bindec(11011011) . " - binárisból decimálisba váltás<hr>";//binárisból decimálisba váltás

?>