<?php 
 require_once('./utils/autoload.php');
 require_once('./utils/connexion.php');

$newreview = new ReviewManager($bdd);
$reviewmsgs = $newreview ->showMessage();
// var_dump($reviewmsgs);

$newoperator = new TourOperatorManager($bdd);
$touroperators = $newoperator->showOperator();
var_dump($touroperators);


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
        <div>
            <p> <?php foreach ($touroperators as $touroperator) {
                echo $touroperator[1] . "<br>";
                echo $touroperator[2] . "<br>";
                echo $touroperator[3] . "<br>";
                echo $touroperator[4] . "<br>";

            } ?></p>
        </div>
        





        <div>
            <p><?php foreach ($reviewmsgs as $reviewmsg) {
                
               
                echo $reviewmsg['message']. "<br>"; 
                echo $reviewmsg['author'] . "<br>"; 
                echo $reviewmsg['tour_operator_id'] . "<br>"; 
                
                }?></p>
        </div>



      

    </section>
</body>
</html>