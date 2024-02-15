<?php

class Destination
{
    private int $id; 
    private string $location; 
    private int $price; 
    private int $tourOperatorId; 

    
    public function __construct($data) 
    {
        $this->id = $data['id'];
        $this->location = $data['location'];
        $this->price = $data['price'];
        $this->tourOperatorId = $data['tour_operator_id'];
    }

    
    public function setId($id)
    {
        $this->id = $id;
    }

   
    public function getId()
    {
        return  $this->id;
    }

    
    public function setLocation($location)
    {
        $this->location = $location;
    }

    
    public function getLocation()
    {
        return $this->location;
    }

    
    public function setPrice($price)
    {
        $this->price = $price;
    }

    
    public function getPrice()
    {
        return $this->price;
    }

    
    public function setTourOperatorId($tourOperatorId)
    {
        $this->tourOperatorId = $tourOperatorId;
    }
    
    
    
    public function getTourOperatorId()
    {
        return $this->tourOperatorId;
    }
}