<?php
/**
 * Created by PhpStorm.
 * User: Geert
 * Date: 01/03/16
 * Time: 16:16
 */



$dag =date("N");
$foutmelding =FALSE;
//$dag =8;
$dag_in_woorden = '';

if($dag == 1){
    $dag_in_woorden = 'maandag';
} elseif ($dag ==2) {
    $dag_in_woorden = 'dinsdag';

} elseif ($dag ==3) {
    $dag_in_woorden = 'woensdag';
} elseif ($dag ==4) {
    $dag_in_woorden ='donderdag';
}elseif ($dag == 5){
    $dag_in_woorden = 'vrijdag';
}elseif ($dag == 6 ){
    $dag_in_woorden = 'zaterdag';
}elseif ($dag == 7){
    $dag_in_woorden = 'zondag';
}else {
    $foutmelding = 'Er klopt iets niet';
}


echo "<h3> Het is vandaag : ",$dag_in_woorden,"</h3>";
if ($foutmelding) echo $foutmelding;