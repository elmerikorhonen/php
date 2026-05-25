<!doctype html>
<html>
    <body>
        <?php
            $luku = $_POST["luku"];
            echo "<h3>Kertotaulu luvulle $luku:</h3>";
            for ($i = 1; $i <= 20; $i++) {
                echo "$luku * $i = " . ($luku * $i) . "<br>";
            }
        ?>
    </body>
</html>