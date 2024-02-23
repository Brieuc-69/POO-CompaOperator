
<?php

require_once ('config/autoload.php'); 
require_once ('config/db.php');

$admin = new Admin([
    'tour_operator' => $_POST['tour_operator'],
    'grade_totale' => $_POST['grade_totale'],
    'grade_count' => $_POST['grade_count'],
    'destination' => $_POST['destination'],
    'price' => $_POST['price'],
    'tour_operator_id' => $_POST['tour_operator_id'],

]);
$admin = new Manager($db);
$admin-> createTourOperator($tourOperator);
$admin-> createDestination($destinations);

?>