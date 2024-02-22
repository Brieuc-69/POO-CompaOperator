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
  <link rel="stylesheet" href="./css/style.css" />
  <title>Document</title>
</head>

<body>
  <header id="header">

    <nav id="nav" class="active">

      <img src="./img/travel.jpg" alt="">

      <ul>
        <li><a class="a" href="">Services</a></li>
        <li><a class="a"href="./avis.php">Tours Opérateur</a></li>
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
          <!-- <div class="card2">
            <img class="radius" src="./img/tunisie.jpg" width="286px" alt="">
            <div class="drapeauxt">
              <h1>Tunis</h1>
              <form action="./tunisie.php" method="">
                <button class="btngo">Go</button>
              </form>
            </div>
          </div>
        </div>
        <div class="colonne">
          <div class="card3">
            <img class="radius" src="./img/monaco.jpg" width="286px" alt="">
            <div class="drapeauxm">
              <h1>Monaco</h1>
              <form action="./monaco.php" method="">
                <button class="btngo">Go</button>
              </form>
</div>
          </div>
          <div class="card4">
            <img class="radius" src="./img/londres.jpg" width="286px" alt="">
            <div class="drapeauxl">
              <h1>Londres</h1>
              <form action="./londres.php" method="">
                <button class="btngo">Go</button>
              </form>
            </div>
          </div>

        </div>
      </div> -->
      <!-- <div class="card" style="width: 18rem; height: 300px;">
        <img src="./img/rome.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Rome</h5>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>

      <div class="card" style="width: 18rem; height: 300px;">
        <img src="./img/tunisie.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Tunis</h5>
<a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>

      <div class="card" style="width: 18rem; height: 300px;">
        <img src="./img/londres.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Londres</h5>

          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>

      <div class="card" style="width: 18rem; height: 300px;">
        <img src="./img/monaco.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Monaco</h5>

          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div> -->
    </section>
  </main>





 
  <script src="./main.js"></script>
</body>

</html>