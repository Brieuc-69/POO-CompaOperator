<?php

require_once './config/autoload.php';
require_once './config/db.php';


$manager = new Manager($db);

$reviews = $manager->getReviewByOperatorId($_POST['operator_id']);
// echo "<pre>";
// var_dump($reviews);
// echo "</pre>";


// var_dump($reviews);
include_once './partials/header.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    div class="box d-flex justify-content-around align-items-center">
    <div class="content">
        <?php

        foreach ($reviews as $review) { ?>
            <div class="card" style="width: 33,33%;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $review['message'] ?></h5>
                    <p class="card-text"><?php echo $review['author'] ?></p>
                    <form action="./avis.php" method="post">
                    </form>
                </div>
            </div>
        <?php } ?>
    </div>
</body>

</html>






<?php include_once './partials/footer.php' ?>