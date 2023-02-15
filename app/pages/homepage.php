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

    <?php require_once(__DIR__.'\components\script.php'); ?>
</body>

</html>