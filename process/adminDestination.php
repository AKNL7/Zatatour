<?php


require_once('../utils/connexion.php');
require_once('../utils/autoload.php');


if (isset($_POST["operator_id"])&& !empty($_POST['operator_id']) &&
isset($_POST["location"])&& !empty($_POST['location']) &&
isset($_POST["price"])&& !empty($_POST['price'])) {



    $newAdminManager = new AdminManager($db);

    $destination = new Destination([
        'tour_operator_id' => $_POST['operator_id'],
        'location' => $_POST['location'],
        'price' => $_POST['price']
    ]);

$newAdminManager->insertDestination($destination);

header('Location: ../Admin.php');

}