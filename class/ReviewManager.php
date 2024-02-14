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