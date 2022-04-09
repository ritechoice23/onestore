<?php

if (isset($_GET['search'])) dump($_GET['search']);

function dump($var)
{
    echo '
<pre>';
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
    </header>
    <h1 class="text-center">Dashboard</h1>

    <div class="container">
        <div>
            <a class="btn btn-primary" href="./create-product.php">Create Product</a>
        </div>
        <div class="mt-3">
            <form action="" method="">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="search" placeholder="Search Product">
                    <button type="submit" class="btn btn-outline-primary search-button" type="button">Search</button>
                </div>
            </form>
        </div>


        <!-- product list -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Desc.</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>
                        <a class="btn btn-sm btn-outline-primary" href="./edit.php">Edit</a>

                        <form class="d-inline-block" action="./delete.php" method="post">
                            <button class="btn btn-sm btn-outline-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="./bootstrap/js/bootstrap.js"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
</body>

</html>