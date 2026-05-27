<?php

if (!isset($_SESSION['kirjautunut'])) {
    header("Location: login.php");
    exit();
}

session_start();

session_destroy();

header("Location: lista.php");
header("Location: logout.php");

?>