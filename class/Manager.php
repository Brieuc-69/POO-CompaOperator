<?php

class Manager {

    private $bdd;


    public function __construct($bdd) {
        $this->bdd = $bdd;
    }

    function getAllDestination(){

        $request = $this->bdd->query('SELECT * FROM destination');
        $destinations = $request->fetchAll();
        return $destinations;
    }

    function getOperatorByDestination(){

        $request = $this->bdd->prepare('SELECT * FROM tour_operator WHERE destinationId = :destinationId');
        $request->execute(array(
            'destinationId' => $destinationId
        ));
        $tourOperators = $request->fetchAll();
        return $tourOperators;

    }

  


    function createReview($data){
        $request = $this->bdd->prepare('INSERT INTO review(location, price, tourOperatorId) VALUES(:location, :price, :tourOperatorId)');
        $request->execute(array(
            'location' => $data['location'],
            'price' => $data['price'],
            'tourOperatorId' => $data['tourOperatorId']
        ));
    }

    public function getReviewByOperatorByOperatorid($id) {

        $request = $this->bdd->prepare('SELECT * FROM review WHERE tour_operator_id = :id');
        $request->execute([
            'id' => $id
        ]);

        $reviews = $request->fetchAll();

        return $reviews;
    
    }
    

    function getAllOperator(){

        $request = $this->bdd->query('SELECT * FROM tour_operator');
        $tourOperators = $request->fetchAll();
        return $tourOperators;
    
    
    }
    
    public function updateOperatorToPremium() {

        function updateOperatorToPremium(){

            $req = $this->bdd->prepare('UPDATE tour_operator SET isPremium = 1 WHERE id = :id');
            $req->execute(array(
                'id' => $id
            ));
        
        }

    }

    function createTourOperator(){

        $request = $this->bdd->prepare('INSERT INTO tour_operator(name, grade, link, isPremium, destinationId) VALUES(:name, :grade, :link, :isPremium, :destinationId)');
        $request->execute(array(
            'name' => $data['name'],
            'grade' => $data['grade'],
            'link' => $data['link'],
            'isPremium' => $data['isPremium'],
            'destinationId' => $data['destinationId']
        ));
    
    
    }

    public function crateDestination() {

         function createDestination(){


            $req = $this->bdd->prepare('INSERT INTO destination(name) VALUES(:name)');
            $req->execute(array(
                'name' => $data['name']
            ));
        
        
        }

    }
        
    
}

?>