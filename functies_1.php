<?php 
    
    
    // BTW berekenen
    
    function BTW ($prijs, $btw =21){
    
    $prijs_incl_btw = $prijs * (1+ $btw/100);
    return $prijs_incl_btw;
    
}



$te_betalen = BTW(100,10);

echo "te betalen : ", $te_betalen;