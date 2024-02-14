<?php
require_once('./utils/connexion.php');
require_once('./utils/autoload.php');

$newDestination = new DestinationManager($bdd);

var_dump($newDestination);
var_dump($newDestination->showDestinationPrice());




?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zatatour</title>
</head>
<body>
    <header>
        <h1>
            Zatatour World
        </h1>
    </header>
    <section>
        
        
    </section>
</body>
</html>