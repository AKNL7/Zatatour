<?php 

Class TourOperatorManager 
{
    
    private PDO $bdd; 

    public function __construct ($bdd) {
        $this->bdd = $bdd; 
    }

    public function showOperator() {
        $request = $this->bdd->query("SELECT * FROM tour_operator");
        return $request->fetchAll();
        
    }

}