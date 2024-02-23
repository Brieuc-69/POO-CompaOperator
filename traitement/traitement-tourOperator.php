<?php
// traitement 

require_once('../config/autoload.php'); // je charge toutes les classes dont j'ai besoin automatiquement
require_once('../config/db.php');

$tourOperator = new TourOperator([
    'name' => $_POST['name'],
    // 'link' => $_POST['link'],
    'grade_count' => $_POST['grade_count'],
    'grade_total' => $_POST['grade_total'],
    // 'is_premium' => $_POST['is_premium'],

]);
$tourOperatorManager = new Manager($db);
$tourOperatorManager->createTourOperator($tourOperator);