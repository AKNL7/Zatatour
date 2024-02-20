<?php 

class TourOperatorManager 
{
    
    private PDO $bdd; 

    public function __construct ($bdd) {
        $this->bdd = $bdd; 
    }

    public function showOperator() {
        $request = $this->bdd->query("SELECT DISTINCT * FROM tour_operator");
        return $this->hydrate($request->fetchAll());
    }

    public function hydrate(array $data) {
        $operators = [];
        foreach($data as $operator) {
            $operators[] = new TourOperator($operator);
        }
        return $operators;
    }

}