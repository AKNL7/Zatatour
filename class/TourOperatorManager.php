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
            $request = $this->db->query("SELECT name FROM tour_operator WHERE id = $byId");
            return $this->hydrate($request->fetch());
        }
    

    public function hydrate(array $data)
    {
        $operators = [];
        foreach ($data as $operator) {
            var_dump($operator);
            $operators[] = new TourOperator($operator);
        }
        return $operators;
    }
}
