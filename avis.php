<?php

include_once('./config/autoload.php');
include_once('./config/db.php');

$manager = new Manager($db);

$reviews = $manager->getReviewByOperatorId($_POST['operator_id']);
var_dump($reviews);


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
    <div class="box d-flex justify-content-around align-items-center">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>


</html>






