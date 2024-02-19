<?php
require_once('./utils/autoload.php');
require_once('./utils/connexion.php');



// Creations des objets review
$newreviews = new ReviewManager($bdd);
$reviews = $newreviews->showMessage();

$Allreviews = [];

foreach ($reviews as $review) {
    $Allreviews[] = new Review($review);
}

// Creation des objets touroperator
$newtop = new TourOperatorManager($bdd);
$Alloperators = $newtop->showOperator();

$operators = [];

foreach ($Alloperators as $Alloperator) {
    $operators[] = new TourOperator($Alloperator);
}

// var_dump($operators);

foreach ($operators as $operator) {
}

// Creation objets destination
$newDestinations = new DestinationManager($bdd);
$topDestinations  = $newDestinations->findAllLocations();
var_dump($topDestinations);

var_dump($topDestinations);
$destinations = [];


// foreach ($topDestinations as $topDestination) {

//     $destinations[] = new Destination($topDestination);
// }


if (isset($_POST['destination']) && !empty($_POST['destination'])) {
    // $selectDestination sert a retrouver une destination pour tout les operateur
    // c'est un tableaux simple
    $selectDestination = $newDestinations->findDestination($_POST['destination']);
// var_dump($selectDestination);
}



?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
    <section>

<?php foreach ($newDestinations->distinctLocation() as $destination) {?>
    
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $destination->getLocation();  ?></h5>
            <p class="card-text">ZATATOUR VOS VACANCES DE REVE</p>
        </div>
        <ul class="list-group list-group-flush">
            
            <li class="list-group-item"><?php  ?> </li>
        </ul>
        <!-- pour premium -->
        <div class="card-body">
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>
    </div>
<?php } ?>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>