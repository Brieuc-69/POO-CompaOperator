<?php


require_once ('../config/autoload.php'); // je charge toutes les classes dont j'ai besoin automatiquement
require_once ('../config/db.php');



$destination = new Destination([
    'location' => $_POST['locations'],
    'price' => $_POST['price'],
    'tour_operator_id' => $_POST['tour_operator_id'],
]);



$manager = new Manager($db);
$manager->createDestination($destination);

header('Location: ../index.php');



?>