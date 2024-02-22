<?php

include_once('./config/autoload.php');
include_once('./config/db.php');


$manager = new Manager($db);

$allOperators = $manager->getAllOperator();

// var_dump($allOperators);


// var_dump($review);

include_once './partials/header.php';

?>
<main>

  <section id="avis" class="d-flex justify-content-center">
    <div class="d-flex justify-content-center">
      <div class="avis">
        <h1>Tour'Operator</h1>
      </div>
<div class="box d-flex justify-content-around align-items-center">
        <div class="content">
          <?php

          foreach ($allOperators as $allOperator) { ?>
            <div class="card" style="width: 33,33%;">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?php echo $allOperator['name'] ?></h5>
                <p class="card-text"><?php echo $allOperator['link'] ?></p>
                <form action="./avis.php" method="post">
                  <input type="hidden" value="<?php echo $allOperator['id'] ?>" name="operator_id">
                  <button type="submit" class="">Voir avis</button>
                </form>
                <a href="#" class="btn btn-primary">Clique ici</a>
              </div>
            </div>
          <?php } ?>
</div>
        <div class="content">

        </div>
        <div class="content">

        </div>
      </div>
      <div class="divform">

      </div>
    </div>
  </section>


</main>

<?php include_once './partials/footer.php' ?>