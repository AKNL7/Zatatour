<?php

class AdminManager
{
    private $db;



    public function __construct($db)
    {
        $this->db = $db;
    }
}
