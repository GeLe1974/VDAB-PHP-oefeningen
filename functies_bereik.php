<?php
/**
 * Created by PhpStorm.
 * User: Geert
 * Date: 05/03/16
 * Time: 15:23
 */


$var1 = 5;
$var2 = 2;

function som(){
    global  $var1;
    global  $var2;
    global $resultaat ;
    $resultaat = $var1 + $var2;

}

som();
echo "$resultaat";


echo "<br>";

function verhogen(&$var)
{
    $var++;
}

$a=5;
verhogen($a);
// $a heeft nu de waarde 6