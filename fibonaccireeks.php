<?php
/**
 * Created by PhpStorm.
 * User: Geert
 * Date: 01/03/16
 * Time: 17:17
 */

//De Fibonaccireeks is een reeks getallen die begint met 0 en 1, en waarbij elk daaropvolgend getal de som is van de twee vorige. We krijgen dus volgende reeks:

//0 1 1 2 3 5 8 13 21 34 ...

//Schrijf een programma dat de opeenvolgende getallen uit de Fibonaccireeks uitschrijft zolang het laatst uitgeschreven getal kleiner is dan 1.000.000.

//Wat je op het scherm te zien krijgt, is dus:






$getal_1= 0;
$getal_2=1;
echo $getal_1," ",$getal_2;
$som = $getal_1 + $getal_2;


while ($som < 1000000){


    echo "$som ";
    $getal_1 = $getal_2;
    $getal_2 = $som;
    $som = $getal_1 + $getal_2;

}


