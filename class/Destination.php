<?php 

Class Destination {
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

    public function getId() {

    }

    public function getLocation () {

    }

    public function getPrice() {

    }

    public function getTourOperatorId() {
        
    }
}