<?php
/**
 * Created by PhpStorm.
 * User: Geert
 * Date: 05/03/16
 * Time: 17:15
 */

$dag = date("N");
if ($dag != 5) {
    header("Location: functies_1.php");
    exit(0);
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">

    <title>Minimum Bootstrap HTML Skeleton</title>

    <!--  -->

    <style>

    </style>

</head>

<body>

<div class="container">

    <?php
    include 'oefening includes/kop.php'; ?>

    Het is vandaag zaterdag.



</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script>
</script>

</body>

</html>


