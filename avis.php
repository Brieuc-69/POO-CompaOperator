<?php

require_once './config/autoload.php';
require_once './config/db.php';


$manager = new Manager($db);
var_dump($_POST);
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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