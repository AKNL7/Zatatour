<?php

require_once('./utils/connexion.php');
require_once('./utils/autoload.php');

$newTourOperateur = new TourOperatorManager($db);

$operators = $newTourOperateur->showOperator();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style/style.css">
  <title>Admin</title>
</head>

<body>

  <form method="post" action="./process/adminTO.php">

    <label>Tour Operator :
      <input name="name" value="" />
    </label>
    <label>Link :
      <input name="link" type="text" value="" />
    </label>
    <div>
      <input type="checkbox" id="premium" name="premium" checked />
      <label for="premium">Premium</label>
    </div>
    <button type="submit">Submit</button>

  </form>


  <form method="post" action="./process/adminDestination.php">

    <select name="operator_id">
      <?php foreach ($operators as $operator) {?>
 <option value="<?= $operator->getId(); ?>"> <?= $operator->getName(); ?></option>
      <?php } ?>

    </select>

    <label>Location :
      <input name="location" type="text" value="" />
    </label>
    <label>price :
      <input name="price" type="number" value="" />
    </label>
   
    <button type="submit">Submit</button>

  </form>
</body>

</html>