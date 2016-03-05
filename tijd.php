<?php
/**
 * Created by PhpStorm.
 * User: Geert
 * Date: 05/03/16
 * Time: 20:28
 */


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">

    <title>Leeftijd</title>

    <!--  -->

    <style>

    </style>

</head>

<body>

<div class="container">

    <div class="col-sm-3"></div>
    <div class="col-sm-6">

    <?php

    $nu = time();
    $dob = mktime(0,0,0,5,19,1974);
    $verschil = $nu - $dob;
    $verschil_in_dagen = ceil($verschil/(60*60*24));
    echo "Je bent geboren op " .date("d-m-Y",$dob).". </br> Dat betekent dat je hier al ".$verschil_in_dagen." dagen rondloopt.";

    ?>

    </div>
    <div class="col-sm-3"></div>


</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script>
</script>

</body>

</html>
