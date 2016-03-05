



<?php
/**
 * Created by PhpStorm.
 * User: Geert
 * Date: 01/03/16
 * Time: 18:30
 */

//Creëer een regel waarbij 9 keer "abc" wordt herhaald met een while-lus.


$x=0;
while ($x<9){
    echo 'abc ';
    $x++;
}

echo "<br>";


//Creëer een regel waarbij 9 keer "xyz" wordt herhaald met een do-while-lus.
$x=1;
do {
    echo 'xyz ';
    $x++;
} while ($x < 10);

echo '<br>';

//Creëer een regel met de getallen 1 tot en met 9 met behulp van een for-lus.

$x=1;

for ($x = 1; $x <= 9; $x++ ){

    print " $x ";
}

print "<br>";


//Creëer een lijst met "Item A", "Item B", "Item C",..., "Item F" met behulp van een for-lus.
echo "<ol>";
for ($x = 'A'; $x<= 'F' ; $x++){
    echo "<li> Item $x </li>";

}
echo "</ol>";
