<?php

class Destination
{
    private $id;
    private $location;
    private $price;
    private $tourOperatorId;

    
    public function __construct($data)
    {
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
