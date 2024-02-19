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

    public function doubleOperator($operatorName) {
  
    $request = $this->bdd->prepare('SELECT * FROM tour_operator WHERE name = :name');
    $request->execute ([
        'name'=> $operatorName
    ]);
     return $request->fetch();
   
    }



        public function insertOperator($data) {
            $insert = $this->bdd->prepare("INSERT INTO tour_operator (`name`, link, grade_count, grade_total, is_premium) VALUES (:name, :link, :grade_count, :grade_total, :is_premium)");
            
            $insert->execute([
                'name' => $data['name'],
                'link' => $data['link'],
                'grade_count' => $data['grade_count'],
                'grade_total' => $data['grade_total'],
                'is_premium' => $data['premium']
            ]);
        }
        


      }


    



