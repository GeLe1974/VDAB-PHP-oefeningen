<?php
/**
 * Created by PhpStorm.
 * User: Geert
 * Date: 05/03/16
 * Time: 17:24
 */

$getal = rand(1, 10);

if($getal % 2 == 0){header("Location: http://www.vdab.be");

}else{
    header("Location: http://www.google.be");

}

exit(0);
