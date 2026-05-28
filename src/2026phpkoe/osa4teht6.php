<!DOCTYPE html>
<html>
<head>
    <title>tehtävä 6</title>
    <meta charset="UTF-8">
</head>
<body>
    <h2>Vieraskirjan tarkistus</h2>
    <form action="osa4teht6.php" method="post">
        <label>Anna nimesi:</label>
        <input type="text" name="nimi" required>
        <label>Anna ikäsi:</label>
        <input type="number" name="ika" required>
        <label>Anna lempivärisi:</label>
        <input type="text" name="lempivari" required>
        <input type="submit" value="Tarkista">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nimi = $_POST["nimi"];
        $ika = $_POST["ika"];
        $lempivari = $_POST["lempivari"];
        
        echo "<p>Hei " . $nimi . "</p>";
        echo "<p>Olet " . $ika . " vuotias.</p>";
        if ($ika >= 18) {
           echo "<p>Olet täysi-ikäinen </p>";
        } else {
            echo "<p>Et ole täysi-ikäinen</p>";
        }
        echo "<p> Lempivärisi on " . $lempivari . "</p>";
    }
?>
</body>
</html>
