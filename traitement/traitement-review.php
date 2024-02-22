<?php

require_once 'config/autoload.php';
require_once 'config/db.php';

$destination = new Manager($destination);
$manager->createDestination($destination);


$review = New Review([
    'id' => $_POST['id'],
    'messages' => $_POST['message'],
    'author' => $_POST['auhtor'],
    'tour_operator_id' => $_POST['tour_operator_id'],
]);

$review = New Manager($review);
$review->createReview($review);


?>