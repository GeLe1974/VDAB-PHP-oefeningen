<?php
/**
 * Created by PhpStorm.
 * User: Geert
 * Date: 01/03/16
 * Time: 17:31
 */


$grondgetal ="3";

echo"<h3>Het gronggetal is ",$grondgetal;
echo"<table width='30%' border='1px'>
        <tr>
            <th width='50%'>macht</th>
            <th>uitkomst</th>
        </tr>";
for ($macht = 0 ; $macht <= 10 ; $macht++ ){
    $uitkomst = pow($grondgetal,$macht);
    echo"<tr><td>",$macht,"</td><td>",$uitkomst,"</td></tr>";



}
echo"</table>";