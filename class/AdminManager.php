<?php
require_once('../utils/connexion.php');
require_once('../utils/autoload.php');





class AdminManager
{
    private PDO $bdd;

    public function __construct($bdd)
    {
        $this->bdd = $bdd;
    }

    public function checkOperator() {
        $checkOp = $this->bdd->query('SELECT tour_operator_id FROM destination'); 
       return $checkOp->fetchAll(); 
       

    }

    public function insertOperator($bdd) {

        $insert = $bdd->prepare("INSERT INTO tour_operator (name, link, is_premium) VALUES (:name, :link, :is_premium)");
        
        $insert->execute([
        ':name' => $_POST['name'],
        ':link' => $_POST['link'],
        ':is_premium' => $_POST['is_premium'],
     
        ]);

      $insertId = $bdd->lastInsertId();
      }


    }




