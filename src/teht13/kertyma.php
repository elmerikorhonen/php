<!doctype html>
<html>
    <body>
        <?php
            $luku = $_POST["luku"];
            $kertymä = 1;
            $i = 1;

            while ($i <= $luku) {
                $kertymä *= $i;
                $i++;
            }

            echo "Luvun $luku kertymä on $kertymä";
        ?>
    </body>
</html>