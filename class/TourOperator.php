<?php

class tourOperator{
    private $id;
    private $name;
    private $link;
    private $gradeCount;
    private $gradeTotalprivate;
    private $ispreminum;
    



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
     * @return  self
     */ 
    public function setGradeTotalprivate($gradeTotalprivate)
    {
        $this->gradeTotalprivate = $gradeTotalprivate;

        return $this;
    }

}