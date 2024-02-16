<?php

class Review
{

    private int  $id;
    private string $message;
    private string $author;
    private int $tourOperatorId;
    

    public function __construct($data)
    {
        $this-> id = $data['id'];
        $this-> message = $data['message'];
        $this-> author = $data['author'];
        $this-> tourOperatorId = $data['tour_operator_id'];
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
