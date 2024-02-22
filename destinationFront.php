<?php


require_once("./utils/autoload.php");
require_once("./utils/connexion.php");
// je dois afficher les touroperator par rapport a une destination ::::::

// je recupere une destination name


$newdestination = new DestinationManager($db);

// je recupere les operateur par rapport a une a une location
$voyages =$newdestination->getOperatorInfo($_POST['custId']);


$operators =[];
$newoperator = new TourOperatorManager($db);

foreach ($voyages as $voyage) {
    // $operators[] = $newoperator->getNameById($voyage->getTourOperatorId());
$holiday = $voyage->getTourOperatorId();



$operatorsHoliday = $newoperator->getNameById($holiday);
var_dump($operatorsHoliday);

}





$newAdminManager = new AdminManager($db);
// $k = $newAdminManager->checkOperatorId();

$reviews = new ReviewManager($db);
// instance de aminmanager



if (isset($_POST['custId']) && !empty($_POST['custId'])) {
// creation d'une instance 
    
     // selectioner des review avec les tour operator
    // $reviews->getReviewByOperatorId();
}



if (
    isset($_POST['author']) && !empty($_POST['author']) &&
    isset($_POST['message']) && !empty($_POST['message'])
) {

    echo "sa marche";

    

    // select toute les review
    // $reviews->showMessage();
    // var_dump($reviews->showMessage());

    // insert des review
    // $reviews->insertReview($_POST);

   
};


// cree une instance tour_operator




 ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style/style.css" rel="stylesheet">
    <title>Destination-Zatatour</title>
</head>

<body class="destination">
    <h1 class="text-center"><?php echo $_POST['custId']; ?></h1>

    <div class="main-content">
        <div class="card_destination">
        <div class="card-image">
            <img src=" ./img/<?php echo ($_POST['custId']); ?>.jpg">
        </div>
        <div class="card-text">
            <p class="card-meal-type"></p>
            <h2 class="card-title">Bienvenue à <?php echo ($_POST['custId']);?></h2>
            <p class="card-body">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus earum nulla, odit nesciunt est ab autem dolorum molestiae esse alias.</p>
        </div>
        <div class="card-price">1650€</div>
    </div>

        </div>

    <div class="reviews">
        <!-- <?php foreach ($reviews->showMessage() as $review) { ?>
            <div class="comment"><?php echo $review['message'] ?></div> -->

        <?php } ?><!-- Add more comments as needed -->
        <form class="destination_comment" action="" method="POST">
            <label>Votre Prenom</label>
            <!-- <input type="text" name="author" value=" <?php $createReview->insertReview() ?> "> -->
            <textarea class="comment" name="message">Type your comment here.</textarea>
            <br>

            <input type="submit" name="submit" value="Send">
        </form>
    </div>
    </div>

    <!-- <div class="to_table">
    <div class="pricing-box-container">
            <div class="pricing-box text-center">
                <h5>Fram</h5>
                <p class="price"><sup>€</sup>1000<sub></sub></p>
                <ul class="features-list">
                    <li><strong>Votre Note</strong> <sub></sub></li>
                    <li><strong>Note Total</strong></li>
                    <li><strong>Premium Operator</strong><a href=""></a> </li>

                </ul>
                <button class="btn-primary">Link</button>
            </div>
        </div> -->

    <div class="pricing-box-container">
        <div class="pricing-box text-center">
            <h5>Fram</h5>
            <p class="price"><sup>€</sup>1000<sub></sub></p>
            <ul class="features-list">
                <li><strong>Votre Note</strong> <sub></sub></li>
                <li><strong>Note Total</strong></li>
                <li><strong>Premium Operator</strong><a href=""></a> </li>

            </ul>
            <button class="btn-primary">Link</button>
        </div>
    </div>
    </div>
</body>

</html>