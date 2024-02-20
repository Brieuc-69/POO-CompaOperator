<?php

require_once 'config/autoload.php'; // je charge toutes les classes dont j'ai besoin automatiquement
require_once 'config/db.php';

$destination = new Manager($destination);
$manager->createDestination($destination);


$review = New Review([
    'id' => $_POST['id'],
    'messages' => $_POST['message'],
    'author' => $_POST['auhtor'],
]);

$review = New Manager($review);
$review->createReview($review);


?>