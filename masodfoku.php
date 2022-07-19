<?php

function masodfoku($a,$b,$c) {
    if($a == 0 && $b == 0) {
        echo "Nem egyenlet!";
    } else if($a == 0) {
        $x = -1 * $c / $b;
        echo "Az egyenlet nem másodfokú. x = " . $x . ".";
    } else {
        $d = $b * $b - 4 * $a * $c;
        if($d > 0) {
            $x1 = (-1 * $b + sqrt($d)) / 2 * $a;
            $x2 = (-1 * $b - sqrt($d)) / 2 * $a;
            echo "Az egyenlet megoldásai: ";
            echo "x1 = " . $x1;
            echo ", ";
            echo "x2 = " . $x2;
        } else if($d == 0) {
            $x = -1 * $b / 2 * $a;
            echo "Csak egy megoldása van: ";
            echo "x = " . $x;
        } else {
            echo "Az egyenletnek nincs gyöke a valós számok halmazán";
        }
    }
}

?>