<?php

require_once('../utils/connexion.php');
require_once('../utils/autoload.php');



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