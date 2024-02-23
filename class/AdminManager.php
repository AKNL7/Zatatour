<?php


class AdminManager
{
    private PDO $db;

    public function __construct($db)
    {
        $this->db = $db;
    }
    //  checker  tout les operateurs   
    public function checkOperator()
    {
        $checkOp = $this->db->query('SELECT tour_operator_id FROM destination');
        return $checkOp->fetchAll();
    }
    // recupere l'id de operator
    public function checkOperatorId($name)
    {

        $checkOp = $this->db->prepare("SELECT id FROM tour_operator WHERE tour_operator.name = $name");
        $checkOp->bindParam(':name', $name, PDO::PARAM_STR);
        $checkOp->execute();
         return  $checkOp->fetch();
    }

    // verifie si il y a des doublon quand on check les operateur
    public function doubleOperator($operatorName)
    {

        $request = $this->db->prepare('SELECT * FROM tour_operator WHERE name = :name');
        $request->execute([
            ':name' => $operatorName
        ]);
        return $request->fetch();
    }


    // insert les operateur
    public function insertOperator($data)
    {
        var_dump($data);
        $insert = $this->db->prepare("INSERT INTO tour_operator (`name`, link, grade_count, grade_total, is_premium) VALUES (:name, :link, :grade_count, :grade_total, :is_premium)");

        $insert->execute([
            'name' => $data['name'],
            'link' => $data['link'],
            'grade_count' => $data['grade_count'],
            'grade_total' => $data['grade_total'],
            'is_premium' => $data['premium']
        ]);
    }

    public function insertDestination(Destination $destination)
    {
   
        $insert = $this->db->prepare("INSERT INTO destination (location, price, tour_operator_id) VALUES (:location, :price, :tour_operator_id)");
        $insert->execute([
            'location' => $destination->getLocation(),
            'price' => $destination->getPrice(),
            'tour_operator_id' => $destination->getTourOperatorId(),
        ]);

    }
}
