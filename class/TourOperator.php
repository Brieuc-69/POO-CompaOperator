<?php

class TourOperator
{

    private $id;

    private $name;

    private $link;

    private $gradeCount;

    private $gradeTotal;

    private $isPremium;


    public function __construct($data)
    {
        if(isset($data['id'])) {
            $this->id = $data['id'];
        }

        $this->name = $data['name'];
    

    }


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }


    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }


    public function getLink()
    {
        return $this->link;
    }

    public function setLink($link)
    {
        $this->link = $link;
    }


    public function getGradeCount()
    {
        return $this->gradeCount;
    }

    public function setGradeCount($gradeCount)
    {
        $this->gradeCount = $gradeCount;
    }

    public function getGradeTotal()
    {
        return $this->gradeTotal;
    }

    public function setGradeTotal($gradeTotal)
    {
        $this->gradeTotal = $gradeTotal;
    }


    public function getIsPremium()
    {
        return $this->isPremium;
    }

    public function setIsPremium($isPremium)
    {
        $this->isPremium = $isPremium;
    }

}
