<?php
session_start();

if (!isset($_SESSION['kirjautunut'])) {
    header("Location: login.php");
    exit();
}

if (!isset($_SESSION['autot'])) {
    $_SESSION['autot'] = array();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $auto = [
        'merkki' => $_POST['merkki'],
        'malli' => $_POST['malli'],
        'vuosi' => $_POST['vuosi']
    ];

    $_SESSION['autot'][] = $auto;

    header("Location: lista.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>Lisää auto</title>
</head>
<body>
<div class="container">
    <h2>Lisää auto</h2>
    <form method="post">
        Merkki: <input type="text" name="merkki"><br>
        Malli: <input type="text" name="malli"><br>
        Vuosi: <input type="number" name="vuosi"><br>
        <input type="submit" value="Tallenna">
    </form>
</div>
</body>
</html>