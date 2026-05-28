<!DOCTYPE html>
<html>
<head>
    <title>tehtävä 4</title>
    <meta charset="UTF-8">
</head>
<body>
    <h2>nelön lasku </h2>

    <form action="osa3teht4.php" method="post">
        <label for="luku">luku:</label>
        <input type="number" id="luku" name="luku" required>
        <br><br>
        <input type="submit" value="Lähetä">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $luku = $_POST["luku"];
        function neliö($luku) {
            return $luku * $luku;
        }
        echo "<p>Syötetty luku: " . $luku . "</p>";
        echo "<p>Luvun neliö: " . neliö($luku) . "</p>";

    }
    ?>
</body>
</html>