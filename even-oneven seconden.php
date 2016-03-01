<?php
/**
 * Created by PhpStorm.
 * User: Geert
 * Date: 01/03/16
 * Time: 16:07
 */

$s= date("s");


($s%2) == 0 ? $uitkomst = 'even' : $uitkomst = 'oneven';

echo $s , "<br>" , "<h3>Het aantal seconden is ",$uitkomst,"</h3>";