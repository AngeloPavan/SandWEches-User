<?php

session_start();
if (empty($_SESSION['user_id'])) {
    header('location: index.php');
}

$page = 'catalog';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once(__DIR__.'\components\head.php'); ?>

    <title>SandWEches</title>
</head>

<body class="overflow-y-hidden">
    <?php require_once(__DIR__.'\components\navbar.php'); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 cart-column vh-915 d-none d-md-block">
                <div class="row cart-column-title">
                    <h4 class="my-3 fw-bold">Categorie</h4>
                </div>
            </div>

            <div class="col-12 my-3 d-block d-md-none">
                <div id="buttonCarousel" class="carousel slide catalog-card-pill-container">
                    <div class="carousel-inner text-center">
                        <div class="carousel-item active">
                            <a href="" class="btn btn-danger rounded-pill" role="button">Salame</a>
                            <a href="" class="btn btn-danger rounded-pill" role="button">Porchetta</a>
                            <a href="" class="btn btn-danger rounded-pill" role="button">Pesce</a>
                        </div>
                        <div class="carousel-item">
                            <a href="" class="btn btn-warning rounded-pill" role="button">Salame</a>
                            <a href="" class="btn btn-warning rounded-pill" role="button">Porchetta</a>
                            <a href="" class="btn btn-warning rounded-pill" role="button">Pesce</a>
                        </div> 
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#buttonCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#buttonCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <div class="col-sm-12 col-md-10 ">
                <div class="row overflow-y-scroll vh-915">
                    <!-- <div class="card mx-auto my-4" style="width: 18rem;">
                        <img src="../assets/img/panini.jpg" class="card-img-top mt-4" alt="...">
                        <div class="card-body">
                            <div class="row">
                                <h5 class="card-title fw-bold">Panino</h5>
                            </div>
                            <div class="row">
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the cards content.</p>
                            </div>
                            <div class="row mt-3">
                                <h5 class="card-title">€ 5,99</h5>
                            </div>
                            <div class="row mt-1">
                                <div class="col-12 text-center">
                                    <a href="#" class="btn btn-danger">Aggiungi al carrello</a>
                                    <a href="#" class="btn btn-warning">Vedi</a>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <?php
                    for($i = 0; $i < 20; $i++){
                        echo('
                        <div class="card mx-auto my-4 catalog-card">
                            <img src="../assets/img/panini.jpg" class="card-img-top mt-4" alt="...">
                            <div class="card-body">
                                <div class="row">
                                    <h5 class="card-title fw-bold">Panino</h5>
                                </div>
                                <div class="row">
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the
                                        bulk of the cards content.</p>
                                </div>
                                <div class="row mt-3">
                                    <h5 class="card-title">€ 5,99</h5>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-12 text-center">
                                        <a href="#" class="btn btn-danger">Aggiungi al carrello</a>
                                        <a href="#" class="btn btn-warning">Vedi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ');
                    };
                    ?>
                </div>
            </div>

            
        </div>
    </div>

    <?php require_once(__DIR__.'\components\script.php'); ?>
</body>

</html>