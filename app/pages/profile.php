<?php

session_start();
if (empty($_SESSION['user_id'])) {
    header('location: index.php');
}

$page = 'profilo';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once(__DIR__.'\components\head.php'); ?>

    <title>SandWEches | Profilo</title>
</head>

<body>
    <?php require_once(__DIR__.'\components\navbar.php'); ?>

    <div class="container-fluid mt-5">
        <div class="col-12 col-md-10 mx-auto">
            <h1>Benvenuto nella pagina del tuo profilo.</h1>
        </div>
    </div>

    <?php require_once(__DIR__.'\components\script.php'); ?>
</body>

</html>