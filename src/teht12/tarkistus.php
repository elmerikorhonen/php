<!doctype html>
<html>
    <body>
        <?php

            $ika = $_POST["ika"];

            if ($ika >= 18) {
                $color = 'green';
                echo "Olet täysi-ikäinen, saat äänestää";
            } elseif ($ika < 0) {
                $color = 'red';
                echo "Virheellinen ikä";
            } elseif ($ika < 18) {
                $color = 'orange';
                echo "Olet ala ikäinen, et saa äänestää";
            } else if ($ika >= 120) {
                $color = 'yellow';
                echo "Virheellinen ikä";
            }