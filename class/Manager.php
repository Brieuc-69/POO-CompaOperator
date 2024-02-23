<?php

class Manager
{

    private $bdd;


    public function __construct($bdd)
    {
        $this->bdd = $bdd;
    }

    function getAllDestination()
    {

        $request = $this->bdd->query('SELECT * FROM destination');
        $destinations = $request->fetchAll();
        return $destinations;
    }

    function getOperatorByDestination($destinationId)
    {

        $request = $this->bdd->prepare('SELECT * FROM tour_operator WHERE destinationId = :destinationId');
        $request->execute(array(
            'destinationId' => $destinationId
        ));
        $tourOperators = $request->fetchAll();
        return $tourOperators;
    }




    function createReview($data)
    {
        $request = $this->bdd->prepare('INSERT INTO review(message, author,) VALUES(:message, :author,)');
        $request->execute(array(
            'message' => $data['message'],
            'auhtor' => $data['author'],
        ));
    }

    public function getReviewByOperatorId($id)
    {

        $request = $this->bdd->prepare('SELECT * FROM review WHERE tour_operator_id = :id');
        $request->execute([
            'id' => $id
        ]);

        $reviews = $request->fetchAll();

        return $reviews;
    }
    function getAllOperator()
    {

        $request = $this->bdd->query('SELECT * FROM tour_operator');
        $tourOperators = $request->fetchAll();
        return $tourOperators;
    }

    public function updateOperatorToPremium($id)
    {
        $request = $this->bdd->prepare('UPDATE tour_operator SET isPremium = 1 WHERE id = :id');
        $request->execute(array(
            'id' => $id
        ));
    }

    function createTourOperator(TourOperator $tourOperator)
    {

        $request = $this->bdd->prepare('INSERT INTO tour_operator(name, grade, link, isPremium, destinationId) VALUES(:name, :grade, :link, :isPremium, :destinationId)');
        $request->execute(array(
            'name' => $tourOperator->getName(),
            'grade_count' => $tourOperator->getGradeCount(),
            'link' => $tourOperator->getLink(),
            'isPremium' => $tourOperator->getIsPremium(),

        ));
    }

    public function crateDestination($data)
    {

        $request = $this->bdd->prepare('INSERT INTO destination(location, price, tour_operator_id) VALUES(:location, :price, :tour_operator_id)');
        $request->execute(array(
            'location' => $data['location'],
            'price' => $data['location'],
            'tour_operator_id' => $data['tour_operator_id'],
        ));
    }
    public function getDestinationById($id) {
        $request = $this->bdd->prepare('SELECT * FROM destination WHERE id = :id ');
        $request->execute(array(
            'id' => $id,
        ));
        $destinations = $request->fetch();
        return $destinations;
    }
}