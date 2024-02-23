<?php

include_once('./config/autoload.php');
include_once('./config/db.php');

$manager = new Manager($db);

$operators = $manager-> getAllOperator();





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


   

<!-- <form action="./traitement/traitement-tourOperator.php" method="post">
        <div class="mb-3">
            <label for="text" class="form-label">Choisis ton TourOperator</label>
            <input type="text" class="form-control" id="tour_operator" name="name">
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">Grade_total</label>
            <input type="text" class="form-control" id="grade_total" name="grade_total">
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">Grade_count</label>
            <input type="text" class="form-control" id="grade_count" name="grade_count">
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
    </form> -->

    

<form action="./traitement/traitement-destination.php" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Choix de Destination</label>
            <input type="text" class="form-control" id="destination" name="locations">
            <div id="text" class="form-text"></div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Prix</label>
            <input type="number" class="form-control" id="price" name="price">
         
        </div>
        <div class="mb-3">
           <select name="tour_operator_id">
                <?php foreach($operators as $operator) { ?>
                <option value="<?php echo $operator['id'] ?>"><?php echo $operator['name'] ?></option>
                <?php } ?>
           </select>
          
        </div>


        <button type="submit" class="btn btn-primary">valider</button>
    </form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>