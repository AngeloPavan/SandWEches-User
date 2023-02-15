<?php
    session_start();

    if (isset($_SESSION['user_id'])) {
        $_SESSION = [];
        session_destroy();
        header('Location: ../pages/index.php');
        exit;

    } else {
        header('Location: ../pages/index.php');
        exit;
    }
?>