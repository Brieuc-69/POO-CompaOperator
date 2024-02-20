<?php



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<h2>Ajouter une Destination</h2>

<form action="traitement/traitement-destination.php" method="post">
    <label for="destination_id">ID de la Destination:</label><br>
    <input type="text" id="destination_id" name="id"><br>
    <label for="locations">Emplacements:</label><br>
    <input type="text" id="locations" name="locations"><br>
    <label for="price">Prix:</label><br>
    <input type="text" id="price" name="price"><br>
    <label for="tour_operator_id">ID du Tour Opérateur:</label><br>
    <input type="text" id="tour_operator_id" name="tour_operator_id"><br><br>
  
    <input type="submit" value="Submit">
</form>

<h2>Ajouter un Avis</h2>

<form action="traitement/traitement-review.php" method="post">
    <label for="review_id">ID de l'Avis:</label><br>
    <input type="text" id="review_id" name="id"><br>
    <label for="message">Message:</label><br>
    <textarea id="message" name="message"></textarea><br>
    <label for="author">Auteur:</label><br>
    <input type="text" id="author" name="author"><br><br>
  
    <input type="submit" value="Submit">
</form>

<h2>Ajouter un Tour Opérateur</h2>

<form action="traitement/traitement-tourOperator.php" method="post">
    <label for="operator_id">ID du Tour Opérateur:</label><br>
    <input type="text" id="operator_id" name="id"><br>
    <label for="name">Nom:</label><br>
    <input type="text" id="name" name="name"><br>
    <label for="link">Lien:</label><br>
    <input type="text" id="link" name="link"><br>
    <label for="grade_count">Nombre de notes:</label><br>
    <input type="text" id="grade_count" name="grade_count"><br>
    <label for="grade_total">Note totale:</label><br>
    <input type="text" id="grade_total" name="grade_total"><br>
    <label for="is_premium">Premium:</label><br>
    <input type="text" id="is_premium" name="is_premium"><br><br>
    <input type="submit" value="Submit">
</form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>