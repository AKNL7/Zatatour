<?php

class Destination
{
    private int $id; 
    private string $location; 
    private int $price; 
    private int $tourOperatorId; 

    
    public function __construct($data) 
    {
        if(isset($data['id'])) {
            $this->id = $data['id'];
        }

        if(isset($data['location'])) {
            $this->location = $data['location'];
        }

        if(isset($data['price'])) {
            $this->price = $data['price'];
        }

        if(isset($data['tour_operator_id'])) {
            $this->tourOperatorId = $data['tour_operator_id'];
        }
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