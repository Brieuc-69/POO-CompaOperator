<?php 
require_once('./config/autoload.php');
require_once('./config/db.php');
$manager = new Manager($db);
$destination = $manager->getDestinationById($_GET['id']);

// var_dump($destination);


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css" />
  <title>Destination</title>
</head>

<body>
<header id="header">
<nav id="nav" class="active">

  <img src="" alt="">
  <h1><?php echo $destination['location']?></h1>

  <ul>
    <li><a class="a" href="">Services</a></li>
    <li><a class="a"href="./destinations.php">Tours Opérateur</a></li>
    <li><a class="a"href="">Déconnexion</a></li>
  </ul>
  <div id="icons"></div>
</nav>


</header>


<div class="mobile">
<div id="nav-mobile-hidden" class="nav-mobile-hidden">

  <ul>
    <li><a href="">Services</a></li>
    <li><a href="./destinations.php">Tours Opérateur</a></li>
    <li><a href="">Déconnexion</a></li>
  </ul>
</div>
</div>

    <main>
      <section id="fond">
        <div class="assemble">
          <div class="booking">
            <div class="divtarif">1 250€
           <a href="https://www.booking.com/hotel/it/palazzo-cardinal-cesi.fr.html?aid=2311236&label=fr-fr-booking-desktop-DCpBIW3k2%2AWIo8XuzMdB9AS652796013276%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg%3Afi%3Atikwd-65526620%3Alp9055498%3Ali%3Adec%3Adm&sid=70311ebe36a0e8fc71fb900ca78057d2&dest_id=-126693;dest_type=city;dist=0;group_adults=2;group_children=0;hapos=1;hpos=1;no_rooms=1;req_adults=2;req_children=0;room1=A%2CA;sb_price_type=total;sr_order=popularity;srepoch=1708073313;srpvid=c7fb3debef8e00b8;type=total;ucfs=1&#hotelTmpl">  <button class="btnreserver">Réserver</button></a> 
            </div>
          </div>
          <div class="booking1">
            <div class="divtarif">2 100€
            <a href="https://www.booking.com/hotel/it/mellini-palace-suites.fr.html?aid=2311236&label=fr-fr-booking-desktop-DCpBIW3k2%2AWIo8XuzMdB9AS652796013276%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg%3Afi%3Atikwd-65526620%3Alp9055498%3Ali%3Adec%3Adm&sid=70311ebe36a0e8fc71fb900ca78057d2&dest_id=-126693;dest_type=city;dist=0;group_adults=2;group_children=0;hapos=1;hpos=1;no_rooms=1;req_adults=2;req_children=0;room1=A%2CA;sb_price_type=total;sr_order=popularity;srepoch=1708073414;srpvid=d2353e20fa1f0257;type=total;ucfs=1&#hotelTmpl"> <button class="btnreserver">Réserver</button></a>
            </div>
          </div>
          <div class="booking2">
            <div class="divtarif"> 825€
            <a href="https://www.booking.com/hotel/it/gandhtelplatino.fr.html?aid=2311236&label=fr-fr-booking-desktop-DCpBIW3k2%2AWIo8XuzMdB9AS652796013276%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg%3Afi%3Atikwd-65526620%3Alp9055498%3Ali%3Adec%3Adm&sid=70311ebe36a0e8fc71fb900ca78057d2&dest_id=-126693;dest_type=city;dist=0;group_adults=2;group_children=0;hapos=1;hpos=1;no_rooms=1;req_adults=2;req_children=0;room1=A%2CA;sb_price_type=total;sr_order=popularity;srepoch=1708073359;srpvid=2f543e0415530354;type=total;ucfs=1&#hotelTmpl"> <button class="btnreserver">Réserver</button></a>

            </div>
          </div>
        </div>
      </section>
    </main>



    <footer></footer>

</body>

</html>