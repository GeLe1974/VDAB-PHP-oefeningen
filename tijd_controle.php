<?php
/**
 * Created by PhpStorm.
 * User: Geert
 * Date: 05/03/16
 * Time: 21:07
 */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">

    <title>Verwacht</title>

    <!--  -->

    <style>

    </style>

</head>

<body>

<div class="container">

    <div class="col-sm-3"></div>
    <div class="col-sm-6">

        <?php

        $verwacht = mktime(20,0,0,5,17,2024);
        $nu = time();

        ($nu >= $verwacht) ? print " Je bent te laat. We hadden je verwacht voor : ". date("d-m-Y H:i ", $verwacht) : print "Je bent op tijd";



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
