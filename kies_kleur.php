<?php
/**
 * Created by PhpStorm.
 * User: Geert
 * Date: 01/03/16
 * Time: 16:45
 */
$kleur ='oranje';


switch($kleur){
    case "blauw" :{
        $a = 'zoals een smurf';
    }
    break;
    case "rood" :{
        $a = 'zoals het midden van de Japanse vlag';
    }
    break;
    case "groen" :{
        $a = "zoals een onrijpe tomaat";
    }
    break;
    default:{
        $a =' een kleur';
    }

}

echo $kleur, " is ",$a;