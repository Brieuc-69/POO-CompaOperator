<?php


require_once 'config/autoload.php'; // je charge toutes les classes dont j'ai besoin automatiquement
require_once 'config/db.php';



$destination = new Destination([
    'id' => $_POST['id'],
    'locations' => $_POST['locations'],
    'price' => $_POST['price'],
    'tour_operator_id' => $_POST['tour_operator_id'],
    
]);

$destination = new Manager($destination);
$manager->createDestination($destination)



?>