<?php
session_start();

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
    <meta charset="UTF-8">
    <title>Lisää auto</title>
</head>
<body>

<form method="post">
    Merkki: <input type="text" name="merkki"><br>
    Malli: <input type="text" name="malli"><br>
    Vuosi: <input type="number" name="vuosi"><br>
    <input type="submit" value="Tallenna">
</form>

</body>
</html>