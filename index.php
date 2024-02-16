<?php
require_once('./utils/autoload.php');
require_once('./utils/connexion.php');

$newreview = new ReviewManager($bdd);
$reviewmsgs = $newreview->showMessage();
// var_dump($reviewmsgs);
$newoperator = new TourOperatorManager($bdd);
$touroperators = $newoperator->showOperator();

$newDestinations = new DestinationManager($bdd);
$topDestinations  = $newDestinations->showDestinationPrice();

$destinations = [];

// hydratation pour affichage du top
foreach ($topDestinations as $topDestination) {
    $destinations[] = new Destination($topDestination);
}

if (isset($_POST['destination']) && !empty($_POST['destination'])) {

    var_dump($_POST['destination']);

    $selectDestinations = $newDestinations->findDestination($_POST['destination']);

    var_dump($selectDestinations);

    // hydration pour afficher les meme destination
    $choiseDestination = [];

    foreach ($selectDestinations as $selectDestination) {

        $choiseDestinations = new Destination($selectDestination);

        var_dump($choiseDestinations);
    }

    
}

?>

<!DOCTYPE html>
<html lang="fr">

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

        <!-- quand je clique sur envoyer en methode post le formulaire envoie id du voyage select -->

        <form action="" method="post">
            <label for="destination">DESTINATION : </label>

            <select name="destination" id="destination">
                <!-- <option value="">--Vers quel destination voulez-vous allez--</option> -->
                <?php foreach ($destinations as $destination) {
                ?> <option value="<?php echo $destination->getLocation(); ?>">
                        <?php echo $destination->getLocation(); ?> </option>
                <?php } ?>
            </select>
            <button type="submit">Envoyer</button>
        </form>
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
                    echo $reviewmsg['message'] . "<br>";
                    echo $reviewmsg['author'] . "<br>";
                    echo $reviewmsg['tour_operator_id'] . "<br>";
                } ?></p>
        </div>
    </section>
</body>

</html>