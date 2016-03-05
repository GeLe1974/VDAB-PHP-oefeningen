<?php
/**
 * Created by PhpStorm.
 * User: Geert
 * Date: 05/03/16
 * Time: 11:26
 */


function breekaf ($string){

    $afgebroken = substr($string,0,3);
    return $afgebroken;

}

$tekst1= "Webleren is fun";
$tekst2 = "VDAB";

echo $tekst1 . "---" . breekaf($tekst1)."... <br>";
echo $tekst2 . "---" . breekaf($tekst2)."... <br>";