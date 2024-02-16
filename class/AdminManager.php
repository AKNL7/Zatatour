<?php

require_once('../utils/autoload.php');
require_once('../utils/connexion.php');




class AdminManager
{
    private $bdd;



    public function __construct($bdd)
    {
        $this->bdd = $bdd;
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




