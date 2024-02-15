<<<<<<< HEAD
<?php


class DestinationManager{
private $db;


public function __construct($db){
$this->db = $db;
 }

public function showDestinationPrice(){
    $request = $this->db->query("SELECT * FROM destination");
   return $request->fetchAll();
}

}


=======
<?php 
>>>>>>> 2202ba7db7cbb5c418795aab9ba9dd84dfc2a374

