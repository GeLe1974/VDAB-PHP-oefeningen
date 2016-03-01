<?php
/**
 * Created by PhpStorm.
 * User: Geert
 * Date: 01/03/16
 * Time: 17:56
 */

echo "Deze getallen zijn deelbaar door 3 en 5 : <br>";

$getal = 0;
while (true){

    $getal++;
    if ($getal >= 100) break;
    if ($getal%15 != 0) continue;
    echo "$getal , ";








}