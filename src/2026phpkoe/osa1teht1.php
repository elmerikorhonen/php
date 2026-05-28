<!DOCTYPE html>
<html>
<head>
    <title>tehtävä 1</title>
    <meta charset="UTF-8">
</head>
<body>
    <form action="osa1teht1.php" method="post">

    <label>Anna ikäsi:</label>
    <input type="number" name="ika" required>

    <br><br>

    <input type="submit" value="Tarkista">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ika = $_POST["ika"];

        if ($ika >= 18 && $ika < 65) {
            echo "<p>Olet täysi-ikäinen.</p>";
        }
        else if($ika < 18) {
            echo "<p>Et ole täysi-ikäinen.</p>";
        }
        else if($ika >= 65) {
            echo "<p>Olet eläkeläinen.</p>";
        }
        
    }
    ?>
</body>
</html>
