<?php

require_once("./utils/autoload.php");
require_once("./utils/connexion.php");
require_once("./class/DestinationManager.php");
require_once("./class/ReviewManager.php");

$reviews = new ReviewManager($db); 
$reviews->showMessage();
// $reviews->insertReview($data);

if(isset($_POST['author']) && !empty($_POST['author']) &&
isset($_POST['message']) && !empty($_POST['message']));

var_dump($_POST['message'], $_POST['author']);

$createReviews = new ReviewManager($db); 
$createReviews->insertReview($_POST);


// var_dump($reviews->showMessage());
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style/style.css" rel="stylesheet">
    <title>Destination-Zatatour</title>
</head>

<body class="destination">
    <h1 class="text-center">Roma</h1>

    <div class="main-content">
        <div class="card_destination">
        <div class="card-image">
            <img src="./img/Rome.jpg">
        </div>
        <div class="card-text">
            <p class="card-meal-type"></p>
            <h2 class="card-title">La Bella Roma</h2>
            <p class="card-body">Eggs Benedict with hollandaise sauce, crispy bacon and an assortment of garden herbs.</p>
        </div>
        <div class="card-price">1650€</div>
    </div>

        </div>

        <div class="reviews">
        <?php foreach ($reviews->showMessage() as $review) { ?>   
            <div class="comment"><?php echo $review['message'] ?></div>
           
          <?php } ?><!-- Add more comments as needed -->
            <form class="destination_comment" action="" method="POST">
                <label>Votre Prenom</label>
                <input type="text" name="author" value=" <?php $createReview->insertReview() ?> ">
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