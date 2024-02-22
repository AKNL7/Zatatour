<?php

class TourOperatorManager
{

    private PDO $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function showOperator()
    {
        $request = $this->db->query("SELECT DISTINCT * FROM tour_operator");
        return $this->hydrate($request->fetchAll(PDO::FETCH_ASSOC));
    }

    public function getNameById($byId)
    {
        $request = $this->db->prepare("SELECT * FROM tour_operator WHERE id = :id");
        $request->execute([
            ':id' => $byId
        ]);

        $donnee = $request->fetch();

        return $this->hydrateOne($donnee);
    }


    public function hydrate(array $data)
    {
        $operators = [];
        foreach ($data as $operator) {
            $operators[] = new TourOperator($operator);
        }
        return $operators;
    }

    public function hydrateOne($data)
    {
         return new TourOperator($data);
    }

    
}
