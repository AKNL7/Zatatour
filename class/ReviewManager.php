<?php

require_once('./utils/connexion.php');
require_once('./utils/autoload.php');

class ReviewManager
{

    private PDO $bdd;




    public function __construct($bdd)

    {
       $this->bdd = $bdd; 
    }


    public function showMessage()
    {
        $request = $this->bdd->query("SELECT * FROM review");
        return $request->fetchAll();
        
    }

    public function showAuthor()
    {
        $request = $this->bdd->query("SELECT author FROM review");
        return $request->fetchAll();
    }

    public function showOperatorId()
    {
        $request = $this->bdd->query("SELECT tour_operator_id FROM review ");
       return $request->fetchAll();
    }

    public function insertReview($data) {
        $request = $this->bdd->prepare('INSERT INTO review ("message", author, tour_operator_id) VALUES (":message", :author, :tour_operator_id)');

        $request->execute([
            ':message' => $data['message'],
            ':author' => $data['author'],
            ':tour_operator_id' => $data['tour_operator_id']
            
        ]);
    }
}
