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

<body>
    <?php require_once(__DIR__.'\components\navbar.php'); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-2 cart-column">
                <div class="row cart-column-title">
                    <h4 class="my-3 fw-bold">Categorie</h4>
                </div>
            </div>
            <div class="col-10">
                sesesese
            </div>
        </div>
    </div>

    <?php require_once(__DIR__.'\components\script.php'); ?>
</body>

</html>