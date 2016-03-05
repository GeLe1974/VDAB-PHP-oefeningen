<?php
/**
 * Created by PhpStorm.
 * User: Geert
 * Date: 01/03/16
 * Time: 18:44
 */



$aantal_rijen ='12';


for ($x = 1;$x<=$aantal_rijen;$x++){
    $y=1;
     while ($y<=$x){
         print'*';
            $y++;
     }
    print "<br>";
}