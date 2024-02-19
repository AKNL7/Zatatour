<?php

require_once('../utils/connexion.php');
require_once('../utils/autoload.php');

if(isset($_POST['name'])&& !empty($_POST['name']) &&
isset($_POST['link']) && !empty($_POST['link']) &&
isset($_POST['destination']) && !empty($_POST['destination']) &&
isset($_POST['price']) && !empty($_POST['price'])
);

// var_dump($_POST);


$checkinfo = new AdminManager($bdd);
$checkinfo->checkOperator();
var_dump($checkinfo->checkOperator());


?>

<form method="post" action="../process/adminTO.php">

  <label>Tour Operator :
    <input name="name" value="" />
  </label>
  <label>Link :
    <input name="link" type="text" value="" />
  </label>
  <label><input type="radio" name="premium" />Premium</label>
  <button type="submit">Submit</button>

</form>