
<?php
// Gère la connexion à la base de données avec une instance de PDO, similaire à la correction du QCM.
try {
    $db = new PDO('mysql:host=localhost;dbname=voyage', 'root', '');
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

?>

