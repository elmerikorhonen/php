<?php
session_start();

$virhe = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $kayttaja = $_POST['kayttaja'];
    $salasana = $_POST['salasana'];

    if ($kayttaja === "admin" && $salasana === "salasana123") {

        $_SESSION['kirjautunut'] = true;

        header("Location: lista.php");
        exit();

    } else {
        $virhe = "Väärä käyttäjätunnus tai salasana!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Kirjautuminen</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h2>Kirjaudu sisään</h2>

    <?php
    if ($virhe != "") {
        echo "<div class='error'>$virhe</div>";
    }
    ?>

    <form method="post">

        <label>Käyttäjätunnus</label>
        <input type="text" name="kayttaja" required>

        <label>Salasana</label>
        <input type="password" name="salasana" required>

        <button type="submit">Kirjaudu</button>

    </form>

</div>

</body>
</html>