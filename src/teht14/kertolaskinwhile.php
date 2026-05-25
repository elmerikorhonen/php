<!doctype html>
<html>
    <body>
        <?php
            $luku = $_POST["luku"];
            echo "<h3>Kertotaulu luvulle $luku:</h3>";
            $i = 1;
            while ($i <= 20) {
                echo "$luku * $i = " . ($luku * $i) . "<br>";
                $i++;
            }
        ?>
    </body>
</html>