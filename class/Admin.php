<?php 

require_once('../utils/connexion.php');
require_once('../utils/autoload.php');

if(isset($_POST['name'])&& !empty($_POST['name']) &&
isset($_POST['link']) && !empty($_POST['link']) &&
isset($_POST['destination']) && !empty($_POST['destination']) &&
isset($_POST['price']) && !empty($_POST['price'])
);



// $insertinfo = new AdminManager($bdd);
?>

<form method="post" action="">
  <label
    >Tour Operator :
    <input name="name" value="" />
  </label>
  <label
    >Link :
    <input name="link" type="url" value="" />
  </label>
  <label
    >Destination :
    <input name="destination" value="" />
  </label>
  <label
    >Price :
    <input name="price" value="" />
  </label>
  <label><input type="radio" name="radio" />Premium</label>
  <button type="submit">Submit</button>
</form>