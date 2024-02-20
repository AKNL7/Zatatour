<?php

require_once('../utils/connexion.php');
require_once('../utils/autoload.php');


var_dump($_POST);

if (
  isset($_POST['name']) && !empty($_POST['name']) &&
  isset($_POST['link']) && !empty($_POST['link']) &&
  isset($_POST['premium']) && !empty($_POST['premium'])
) {
  echo 'post apres';
  var_dump($_POST);
// creation des instance
  $newadmin = new AdminManager($db);
  $newDestinationInsertManager = new DestinationManager($db);

  $name = $_POST['name'];

  if (isset($_POST['premium'])) {
    $premium = 1;
  } else {
    $premium = 0;
  }
  var_dump($name);


// id operator
$idOperateur = $newadmin->checkOperatorId($name);


  if (!$newadmin->doubleOperator($_POST['name'])) {
    $data = [
      'name' => $_POST['name'],
      'link' => $_POST['link'],
      'grade_count' => 0,
      'grade_total' => 0,
      'premium' => $premium
    ];

    $name = $_POST['name'];
    var_dump($name);

    $newadmin->insertOperator($data);
 
  }

header('Location: ../Admin.php');
} else {
    echo "Erreur";
}