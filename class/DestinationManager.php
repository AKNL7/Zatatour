<?php


class DestinationManager{
private $db;


public function __construct($db){
$this->db = $db;
 }

public function showDestinationPrice(){
    $request = $this->db->query("SELECT * FROM destination");
    $destinationPrice = $request->fetchAll();
    var_dump($destinationPrice);
    return $destinationPrice;
}




}



