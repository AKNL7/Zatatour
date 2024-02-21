<?php

class TourOperator{
    private $id;
    private $name;
    private $link;
    private $gradeCount;
    private $gradeTotalprivate;
    private bool $isPremium = false;


    public function __construct($data) {

        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->link = $data['link'];
        $this->gradeCount = $data['grade_count'];
        $this->gradeTotalprivate = $data['grade_total'];
        $this->isPremium = $data['is_premium'];
    }




    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of link
     */ 
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set the value of link
     *
     * @return  self
     */ 
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }
    public function getgradeCount(){

        return $this->gradeCount;
    }

    public function setgradeCount($gradeCount){
        $this->gradeCount= $gradeCount;
        return $this;

    }

    /**
     * Get the value of gradeTotalprivate
     */ 
    public function getGradeTotalprivate()
    {
        return $this->gradeTotalprivate;
    }

    /**
     * Set the value of gradeTotalprivate
     *
     
     */ 
    public function setGradeTotalprivate($gradeTotalprivate)
    {
        $this->gradeTotalprivate = $gradeTotalprivate;

        return $this;
    }


    public function setisPremium($isPremium) {
        $this->isPremium = $isPremium;
    }

    public function getisPremium() {

        return $this->isPremium;
    }
    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}