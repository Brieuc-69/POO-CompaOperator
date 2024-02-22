<?php

include_once('./config/autoload.php');
include_once('./config/db.php');

$Alloperator = $manager-> getAllOperator($_POST['tour_operator'], $_POST['grade_totale'], $_POST['grade_count']);

$destination = $manager->crateDestination($_POST['destination'], $_POST['price'], $_POST['tour_operator_id']);



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <form action="./traitement/traitement.admin.php" method="post">
        <div class="mb-3">
            <label for="text" class="form-label">Choisis ton TourOperator</label>
            <input type="text" class="form-control" id="tour_operator" aria-describedby="text">
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">Grade_total</label>
            <input type="text" class="form-control" id="grade_total" aria-describedby="text">
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">Grade_count</label>
            <input type="text" class="form-control" id="grade_count" aria-describedby="text">
        </div>
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="premium">
            <label class="form-check-label" for="flexSwitchCheckDefault">Pas de compte Premium</label>
        </div>
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="premium" checked>
            <label class="form-check-label" for="flexSwitchCheckChecked">Compte Premium</label>
        </div>
        <button type="submit" class="btn btn-primary">valider</button>
    </form>

    <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Choix de Destination</label>
            <input type="text" class="form-control" id="destination" aria-describedby="text">
            <div id="text" class="form-text"></div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Prix</label>
            <input type="text" class="form-control" id="price" aria-describedby="text">
            <div id="text" class="form-text"></div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">tour_operator_id</label>
            <input type="text" class="form-control" id="tour_operator_id" aria-describedby="text">
            <div id="text" class="form-text"></div>
        </div>


        <button type="submit" class="btn btn-primary">valider</button>
    </form>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>