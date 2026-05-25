<!doctype html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Taulukko</title>

    <style>
        table {
            border-collapse: collapse;
            margin-top: 20px;
        }

        td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
    </style>

</head>
<body>

<?php

    $rivit = $_POST["rivit"];
    $sarakkeet = $_POST["sarakkeet"];
    $vari = $_POST["vari"];
    $tekstivari = $_POST["tekstivari"];

    echo "<table style='background-color:$vari; color:$tekstivari;'>";

    for ($i = 1; $i <= $rivit; $i++) {

        echo "<tr>";

        for ($j = 1; $j <= $sarakkeet; $j++) {

            echo "<td>rivi $i solu $j</td>";

        }

        echo "</tr>";
    }

    echo "</table>";

?>

</body>
</html>