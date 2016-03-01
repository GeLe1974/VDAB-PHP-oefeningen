<?php
/**
 * Created by PhpStorm.
 * User: Geert
 * Date: 01/03/16
 * Time: 16:28
 */

$getal_1 = 4;
$getal_2 = 3;

if ($getal_2 > $getal_1){
    $a= ' is kleiner dan ';
} elseif ($getal_1 > $getal_2){
    $a = ' is groter dan ';
}else {
    $a = ' is gelijk aan ';
}

echo "getal 1 = ", $getal_1 , "<br> getal 2 = ",$getal_2, "<br>";
echo $getal_1 , $a, $getal_2;