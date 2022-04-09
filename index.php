<?php
dump($_GET['get']);

function dump($var)
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Onestore.com</title>
    <?php include('./includes/style.inc.php') ?>
</head>

<body>

    <header>
        <?php include('./includes/navbar.inc.php') ?>

        <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
            <h1 class="display-4 fw-normal">Welcome</h1>
            <p class="fs-5 text-muted">Get all product you want with few click.</p>
        </div>
    </header>
    <h1 class="text-center">Our Awesome Product</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-4 mt-4">
                <div class="card">
                    <div class="card-title p-2 fw-bolder h3 text-center">
                        Product Title
                    </div>
                    <div class="card-image">
                        <img class="img-fluid" src="./images/doyin.jpg" alt="">
                    </div>
                    <div class="card-body">
                        Price
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-4">
                <div class="card">
                    <div class="card-title p-2 fw-bolder h3 text-center">
                        Product Title
                    </div>
                    <div class="card-image">
                        <img class="img-fluid" src="./images/doyin.jpg" alt="">
                    </div>
                    <div class="card-body">
                        Price
                    </div>
                </div>
            </div>

            <div class="col-md-4  mt-4">
                <div class="card">
                    <div class="card-title p-2 fw-bolder h3 text-center">
                        Product Title
                    </div>
                    <div class="card-image">
                        <img class="img-fluid" src="./images/doyin.jpg" alt="">
                    </div>
                    <div class="card-body">
                        Price
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-4">
                <div class="card">
                    <div class="card-title p-2 fw-bolder h3 text-center">
                        Product Title
                    </div>
                    <div class="card-image">
                        <img class="img-fluid" src="./images/doyin.jpg" alt="">
                    </div>
                    <div class="card-body">
                        Price
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-4">
                <div class="card">
                    <div class="card-title p-2 fw-bolder h3 text-center">
                        Product Title
                    </div>
                    <div class="card-image">
                        <img class="img-fluid" src="./images/doyin.jpg" alt="">
                    </div>
                    <div class="card-body">
                        Price
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-4">
                <div class="card">
                    <div class="card-title p-2 fw-bolder h3 text-center">
                        Product Title
                    </div>
                    <div class="card-image">
                        <img class="img-fluid" src="./images/doyin.jpg" alt="">
                    </div>
                    <div class="card-body">
                        Price
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-4">
                <div class="card">
                    <div class="card-title p-2 fw-bolder h3 text-center">
                        Product Title
                    </div>
                    <div class="card-image">
                        <img class="img-fluid" src="./images/doyin.jpg" alt="">
                    </div>
                    <div class="card-body">
                        Price
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-4">
                <div class="card">
                    <div class="card-title p-2 fw-bolder h3 text-center">
                        Product Title
                    </div>
                    <div class="card-image">
                        <img class="img-fluid" src="./images/doyin.jpg" alt="">
                    </div>
                    <div class="card-body">
                        Price
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./bootstrap/js/bootstrap.js"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
</body>

</html>