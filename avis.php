<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <title>Avis</title>
</head>
<body>
<header>
    <header id="header">
      <div>

        <img class="imglogo" src="./img/travel.jpg" alt="" />
      </div>

      <nav>
        <ul>
         <a href="./accueil.php" class="accueil"> <li>Accueil</li></a>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
        </ul>
      </nav>

    </header>
    <main>

<section id="avis">
<div class="flex">
<div class="avis">
    <h1>Avis</h1>
</div>


<div class="box">
    <div class="content">

    </div>
    <div class="content" >

    </div>
    <div class="content">

    </div>
</div>
<div class="divform">
<form action="/ma-page-de-traitement" method="post">
  <ul>
    <li>

      <input type="text" placeholder="Nom" id="name" name="user_name" />
    </li>
    <li>

      <input type="email" placeholder="E-mail" id="mail" name="user_mail" />
    </li>
    <li>

      <textarea id="msg" placeholder="Message" name="user_message"></textarea>
      
    </li>
    <li>
      <button class="buttonform">Envoyer</button>
    </li>
  </ul>
</form>
</div>
</div>
</section>


    </main>
    <footer></footer>
</body>
</html>