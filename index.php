<?php 
 require_once('./utils/autoload.php');
 require_once('./utils/connexion.php');

$newreview = new ReviewManager($bdd);
var_dump ($newreview->showMessage());
var_dump($newreview->showAuthor());
var_dump($newreview->showOperatorId());

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
            zatatour World
        </h1>
    </header>
    <section>
        
        
    </section>
</body>
</html>