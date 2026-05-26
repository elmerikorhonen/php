<?php
session_start();

if (!isset($_SESSION['autot'])) {
    $_SESSION['autot'] = [];
}

if (isset($_GET['poista'])) {

    unset($_SESSION['autot'][$_GET['poista']]);

    header("Location: lista.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Autolista</title>
</head>
<body>

<h1>Autot</h1>

<?php

foreach ($_SESSION['autot'] as $i => $auto) {

    echo $auto['merkki'] . " ";
    echo $auto['malli'] . " ";
    echo "(" . $auto['vuosi'] . ") ";

    echo "<a href='?poista=$i'>Poista</a>";

    echo "<br>";
}
?>

<br>

<a href="lisaa.php">Lisää auto</a>

<br><br>

<a href="tyhjenna.php">Tyhjennä lista</a>

</body>
</html>