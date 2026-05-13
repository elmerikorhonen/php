<!doctype html>
<html>
    <head>
        <title>Laskin</title>
    </head>
    <body>
        <?php
            $luku1 = $_POST['luku1'];
            $luku2 = $_POST['luku2'];
            $summa = $luku1 + $luku2;
            $keskiarvo = $summa / 2;
            echo 'Summa on '.$summa;
            echo '<br>';
            echo 'Keskiarvo on '.$keskiarvo;
        ?>
    </body>
</html>
