<?php

mt_srand(mktime(0));//bizonyos másodperc után generál egy számot, segíti az mt_rand függvényt, de nem kötelező
echo "egyszerű randomszám generálás: " . mt_rand() . "<hr>";//egyszerű randomszám generálás
echo "0 és 9 közötti szám generálás: " . mt_rand()%10 . "<hr>";//0 és 9 közötti szám
echo "1 és 10 közötti szám generálás: " . mt_rand()%10+1 . "<hr>";//1 és 10 közötti szám
echo "10 és 50 közötti szám generálás: " . mt_rand(50,100) . "<hr>";//10 és 50 közötti szám
echo "0 és 10 között két tizedes pontossággal valós számok generálása: " . mt_rand() % 10 + (mt_rand() % 100) / 100 . "<hr>";//valós számok

?>