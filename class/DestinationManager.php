
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

public function findDestination($destination){
    
    var_dump($destination['destination']);
$request = $this->db->query("SELECT location FROM destination WHERE destination.location = $destination");
return $request->fetchAll();
}

}

