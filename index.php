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
    $operators[]= new TourOperator($Alloperator);
}

var_dump($operators);

foreach ($operators as $operator) {
   
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>zatatour</title>
</head>
<body>
    <header>
        <h1>
            zatatour World
        </h1>
    </header>
    <section>
       
    <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">An item</li>
    <li class="list-group-item">A second item</li>
    <li class="list-group-item"><?php echo $operators[1]->getName() ?> </li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
        





        



      

    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>