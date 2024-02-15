<?php

class Review
{

    private $id;
    private $message;
    private $author;
    private $tourOperatorId;
    private PDO $bdd;

    public function __construct($data)
    {
        
    }



    public function setId($id)
    {
        $this->id = $id;
    }
    
    public function getId(): int
    {
        return $this->id;
    }

   
    public function setMesssage($message)
    {
        $this->message = $message;
    }

    
    public function getMessage(): string
    {
        return $this->message;
    }
    
    public function setAuthor($author)
    {
        $this->author = $author;
    }

   
    public function getAuthor()
    {
        return $this->author;
    }

    
    public function setTourOperatorId($tourOperatorId)
    {
        $this->tourOperatorId = $tourOperatorId;
    }


   
    public function getTourOperatorId()
    {
        return $this->tourOperatorId;
    }
}
