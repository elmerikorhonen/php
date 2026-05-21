<!doctype html>
<html>
    <body>
        <?php
            $luku1 = $_POST["luku1"];
            $luku2 = $_POST["luku2"];
            $luku3 = $_POST["luku3"];
            if ($luku1 > $luku2 && $luku1 > $luku3) {
                echo "$luku1 on suurin luku";
            } elseif ($luku2 > $luku1 && $luku2 > $luku3) {
                echo "$luku2 on suurin luku";
            } else {
                echo "$luku3 on suurin luku";
            }
        ?>
    </body>
</html>