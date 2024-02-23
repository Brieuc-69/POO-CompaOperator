<?php
require_once('./config/autoload.php');
require_once('./config/db.php');

$manager = new Manager($db);
$destinations = $manager->getAllDestination();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css" />
  <title>Document</title>
</head>

<body>
  <header id="header">

    <nav id="nav" class="active">

      <img src="./img/travel.jpg" alt="">

      <ul>
        <li><a class="a" href="">Services</a></li>
        <li><a class="a"href="./tour_operator.php">Tours Opérateur</a></li>
        <li><a class="a"href="">Déconnexion</a></li>
      </ul>
      <div id="icons"></div>
    </nav>


  </header>
<div class="mobile">
    <div id="nav-mobile-hidden" class="nav-mobile-hidden">

      <ul>
        <li><a href="">Services</a></li>
        <li><a href="./avis.php">Tours Opérateur</a></li>
        <li><a href="">Déconnexion</a></li>
      </ul>
    </div>
  </div>
  <main>
    <section id="accueil">

      <!-- <div>
    <input id="searchbar" onkeyup="search_animal()" type="text"
        name="search" placeholder="Search animals..">
    </div> -->
    <?php foreach ($destinations as $destination) { ?>
      <div class="cards">
        <div class="colonne">
          <div class="card1">
            <img class="radius" src="./img/<?php echo $destination['location'] ?>.jpg" width="286px" alt="">
            <div class="drapeaux-<?php echo $destination['location'] ?>">
              <h1><?php echo $destination['location'] ?></h1>

                <button class="btngo"><a class="go" href="./destinations.php?id=<?php echo $destination['id']?>">Go</a></button>
 
            </div>
          </div>
          <?php } ?>
</section>
  </main>






  <script src="./main.js"></script>
</body>

</html>