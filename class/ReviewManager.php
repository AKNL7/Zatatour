<<<<<<< HEAD
<?php 

Class ReviewManager  {
    private PDO $db; 




public function __construct($db)

{
    $this->db = $db;
}


public function showMessage() 
{
    $request = $this->db->prepare('SELECT * FROM message ');

}

public function showAuthor() 
{
    $request = $this->db->prepare('SELECT * FROM author');

}

public function showOperatorId() 
{
    $request = $this->db->prepare('SELECT * FROM review WHERE id ');

}




}
=======
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

    
}
>>>>>>> 2202ba7db7cbb5c418795aab9ba9dd84dfc2a374
