<!DOCTYPE html>
<html>
<head>
    <title>tehtävä 5</title>
    <meta charset="UTF-8">
</head>
<body>
    <h2>Parillisuuden tarkistus</h2>
    <form action="osa3teht5.php" method="post">
        <label>Anna luku:</label>
        <input type="number" name="luku" required>
        <input type="submit" value="Tarkista">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $luku = $_POST["luku"];

        if ($luku % 2 == 0) {
            echo "<p>Luku on parillinen.</p>";
        } else {
            echo "<p>Luku on pariton.</p>";
        }
    }
    ?>
</body>
</html>
    