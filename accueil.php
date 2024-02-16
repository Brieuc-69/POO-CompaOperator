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
    <div>

      <img class="imglogo" src="./img/travel.jpg" alt="" />
    </div>

    <nav>
      <ul>
        <li>Services</li>
        <li>Tours Opérateur</li>
        <li>Déconnexion</li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </nav>


  </header>


  <main>
    <section id="accueil">

      <!-- <div>
    <input id="searchbar" onkeyup="search_animal()" type="text"
        name="search" placeholder="Search animals..">
    </div> -->
      <div class="cards">
        <div class="card1">
          <img class="radius" src="./img/rome.jpg" width="286px" alt="">
          <div class="drapeauxr">
            <h1>Rome</h1>
            <form action="./rome.php" method="">
            <button class="btngo">Go</button>
          </form>
          </div>
        </div>

        <div class="card2">
          <img class="radius" src="./img/tunisie.jpg" width="286px" alt="">
          <div class="drapeauxt">
            <h1>Tunis</h1>
            <form action="./tunisie.php" method="">
            <button class="btngo">Go</button>
          </form>
          </div>
        </div>

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



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>