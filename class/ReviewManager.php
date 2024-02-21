<?php

require_once('./utils/connexion.php');
require_once('./utils/autoload.php');

class ReviewManager
{

    private PDO $db;




    public function __construct($db)

    {
       $this->db = $db; 
    }


    public function showMessage()
    {
        $request = $this->db->query("SELECT * FROM review");
        return $request->fetchAll();
        
    }

    public function showAuthor()
    {
        $request = $this->db->query("SELECT author FROM review");
        return $request->fetchAll();
    }

    public function showOperatorId()
    {
        $request = $this->db->query("SELECT tour_operator_id FROM review ");
       return $request->fetchAll();
    }

    public function insertReview($data) {
        $request = $this->db->prepare('INSERT INTO review ("message", author, tour_operator_id) VALUES (":message", :author, :tour_operator_id)');

        $request->execute([
            ':message' => $_POST['message'],
            ':author' => $_POST['author'],
            ':tour_operator_id' => $_POST['tour_operator_id']
            
        ]);
    }
}
