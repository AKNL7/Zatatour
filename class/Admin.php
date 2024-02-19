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

<form method="post" action="">
  <label
    >Tour Operator :
    <input name="name" value="" />
  </label>
  <label
    >Link :
    <input name="link" type="url" value="" />
  </label>
  <label for="destination">DESTINATION : </label>

<select name="destination" id="destination">
    <!-- <option value="">--Vers quel destination voulez-vous allez--</option> -->
    <?php foreach ($destinations as $destination) {
    ?> <option value="<?php echo $destination->getLocation(); ?>">
            <?php echo $destination->getLocation(); ?> </option>
    <?php } ?>
</select>
  <label
    >Price :
    <input name="price" value="" />
  </label>
  <label><input type="radio" name="radio" />Premium</label>
  <button type="submit">Submit</button>
</form>