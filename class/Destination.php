<?php

class Destination {

    private $id;

    private $location;

    private $price;

    private $tourOperatorid;


    public function __construct($data)
    {
        $this->id = $data['id'];
        $this->location = $data['location'];
        $this->price = $data['price'];
        $this->tourOperatorid = $data['tour_operator_id'];
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getLocation() {
        return $this->id;
    }


    public function setLocation($location) {
        $this->location = $location;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getTourOeratorld() {
        return $this->tourOperatorid;
    }


    public function setTourOperatorId($tourOperatorld) {
        $this->tourOperatorid = $tourOperatorld;
    }


    
}

?>

