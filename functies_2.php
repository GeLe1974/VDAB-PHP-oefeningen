<?php


// BTW berekenen

function BTW ($prijs, $btw =21){

    $prijs_incl_btw = $prijs * (1+ $btw/100);
    return $prijs_incl_btw;

}



$te_betalen = BTW(100,10);

echo "te betalen : ", $te_betalen;


echo"<br>-----------------<br>";


function evenlang($string1 , $string2){

    $lengte1 = strlen($string1);
    $lengte2 = strlen($string2);
    return ($lengte1 == $lengte2);
}


if (evenlang('woorden','woorden')){
    echo " de woorden zijn even lang.";
}else{
    echo " de woorden zijn niet even lang.";
}