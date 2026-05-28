<!DOCTYPE html>
<html>
<head>
    <title>tehtävä 7</title>
    <meta charset="UTF-8">
</head>
<body>
    <h2>Kertoman lasku </h2>
    <form action="osa5teht7.php" method="post">
        <label for="luku">luku:</label>
        <input type="number" id="luku" name="luku" required>
        <br><br>
        <input type="submit" value="Lähetä">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $luku = $_POST["luku"];
        $kertoma = $luku;
        if ($kertoma < 0) {
            echo "<p>Kertoma ei määriteltävissä negatiivisille luvuille.</p>";
        } else {
            for ($i = $kertoma - 1; $i > 0; $i--) {
                $kertoma *= $i;
            }
        }
        echo "<p>Syötetty luku: " . $luku . "</p>";
        echo "<p>Luvun kertoma: " . $kertoma . "</p>";

    }
?>
</body>
</html>
