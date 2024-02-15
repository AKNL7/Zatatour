<?php
require_once('./utils/connexion.php');
require_once('./utils/autoload.php');

$newDestinations = new DestinationManager($bdd);

 $topDestinations  = $newDestinations->showDestinationPrice();

 $destinations = [];

foreach ($topDestinations as $topDestination) {

   $destinations[] = new Destination($topDestination);
}
 
var_dump($destinations);
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
         <h3> TOP DESTINATION</h3>
        <form action="" method="post">
            <?php 
            foreach ($topDestinations  as $topDestination ) {

                ?> <a href=""> <?php echo $topDestination['location']; $topDestination->getLocation?> </a> 
                 <a href=""> <?php echo $topDestination['price'];?> <br></a> 
                <?php } ?>
           
        </form>
    </header>
    <section>
        
        
    </section>
</body>
</html>