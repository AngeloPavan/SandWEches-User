<?php

session_start();
if (empty($_SESSION['user_id'])) {
    header('location: index.php');
}

$page = 'home';
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
        <div class="row home-item-row">
            <div class="col-7 home-item panino">
                <h1 class="text-center">PANINI</h1>
            </div>
            <div class="col-4 home-item snack">
                <h1 class="text-center">SNACKS</h1>
            </div>
        </div>
        <div class="row home-item-row">
            <div class="col-5 home-item bibita">
                <h1 class="text-center">BEVANDE</h1>
            </div>
            <div class="col-6 home-item piadina">
                <h1 class="text-center">PIADINE</h1>
            </div>
        </div>
    </div>

    <?php require_once(__DIR__.'\components\script.php'); ?>
</body>

</html>