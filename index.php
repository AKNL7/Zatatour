<?php
require_once('./utils/autoload.php');
require_once('./utils/connexion.php');



// Creations des objets review
$newreviews = new ReviewManager($db);
$reviews = $newreviews->showMessage();

$Allreviews = [];

foreach ($reviews as $review) {
    $Allreviews[] = new Review($review);
}

// Creation des objets touroperator
$newtop = new TourOperatorManager($db);
// $Alloperators = $newtop->showOperator();


// Creation objets destination
$newDestinations = new DestinationManager($db);
$topDestinations  = $newDestinations->findAllLocations();

$destinations = [];




if (isset($_POST['destination']) && !empty($_POST['destination'])) {
    // $selectDestination sert a retrouver une destination pour tout les operateur
    // c'est un tableaux simple
    $selectDestination = $newDestinations->distinctLocation($_POST['destination']);
}




?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./style/style.css">
    <title>zatatour</title>

</head>

<body>

    <header class="header">

        <h1>
            Zatatour World
        </h1>

    </header>

    <h3> TOP DESTINATION</h3>

    <!-- quand je clique sur envoyer en methode post le formulaire envoie id du voyage select -->

    <form action="" method="post">
        <label for="destination">DESTINATION : </label>

        <select name="destination" id="destination">
            <!-- <option value="">--Vers quel destination voulez-vous allez--</option> -->
            <?php foreach ($newDestinations->distinctLocation() as $destination) {
            ?> <option value="<?php echo $destination->getLocation(); ?>">
                    <?php echo $destination->getLocation(); ?> </option>
            <?php } ?>
        </select>
        <button type="submit">Envoyer</button>
    </form>
    </header>


    <section class="cards_group">
        <div class="main">
            <?php foreach ($newDestinations->distinctLocation() as $destination) { ?>


                <ul class="cards">
                    <li class="cards_item">
                        <div class="card">
                            <div class="card_image">
                                <img src="./img/zatatoyur.jpg" alt="mixed vegetable salad in a mason jar." />
                                <span class="card_price"><span>$</span>9</span>
                            </div>
                            <div class="card_content">
                                <h2 class="card_title"><?php echo $destination->getLocation();  ?></h2>
                                <div class="card_text">
                                    <p>Dig into the freshest veggies of the season! This salad-in-a-jar features a mixture of

                                    </p>
                                    <hr />



                                    <form action="destinationFront.php" method="post">


                                        <input type="hidden" name="custId" value="<?php echo $destination->getLocation();
                                                                                    ?>">
                                        <input type="submit" value="Submit">
                                    </form>







                                </div>
                            </div>

                        </div>
                    </li>

                </ul>
                <form action="./destinationFront.php" method="post">
                    <input type="hidden" name="location" value="<?php echo $destination->getLocation();  ?>">
                    <input type="submit" value="Submit">
                </form>

            <?php  } ?>
        </div>
    </section>

</body>

</html>