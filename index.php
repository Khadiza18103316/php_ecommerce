<?php

$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'ecommerce');
$sql = "SELECT *FROM products WHERE featured=1";
$featured= $con->query($sql);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Technology</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="https://ajax.com.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.css">
    </script>
    <script src="js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">TechBuy.com</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-2">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Products
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="products-laptop.php">Laptop</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="products-phones.php">Phones</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="col-md-2"></div>

    <div class="col-md-8">
        <div class="row">
            <h2 class="text-center">
                Top Products
            </h2> <br> <br>
            <?php
            while($product = mysqli_fetch_assoc($featured));
            ?>

            <div class="col-md-5">
                <h4>
                    <?=$product['title'];?>
                </h4>
                <img src="<?= $product['image'];?>" alt="<?= $product['title']; ?>" />
                <p class="1price">Rs <?= $product['price'];?></p>
                <a href="details.php">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-target="#details-1">More</button>
                </a>
            </div>
            <?php 'endwhile'; ?>
        </div>
    </div>
</body>

</html>