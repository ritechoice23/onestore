<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product - Onestore.com</title>
    <?php include('./includes/style.inc.php') ?>
</head>

<body>

    <header>
        <?php include('./includes/navbar.inc.php') ?>
    </header>
    <h1 class="text-center">Create Product</h1>

    <div class="container">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <input type="text" class="form-control" name="title" placeholder="Product Title">
            </div>

            <div class="mb-3">
                <input type="text" class="form-control" name="title" placeholder="Product Description">
            </div>

            <div class="mb-3">
                <input type="text" class="form-control" name="title" placeholder="Product Price">
            </div>
            <label for="image">Product Image</label>
            <div class="mb-3">
                <input type="file" id="image" name="image" placeholder="">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="./bootstrap/js/bootstrap.js"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
</body>

</html>