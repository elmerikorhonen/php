<!doctype html>
<html>
    <head>
        <title>kulutus</title>
    </head>
    <body>
        <?php
            $matka = $_GET['matka'];
            $kulutus = $_GET['kulutus'];
            $hinta = $_GET['hinta'];
            $kustannus = ($matka / 100) * $kulutus * $hinta;
            echo 'Kustannus on '.$kustannus.' €';
        ?>
    </body>
</html>