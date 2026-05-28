<!doctype html>
<html>
    <body>
        <?php

            function primenumber($n) {
                if ($n <= 1) {
                    return false;
                }
                if ($n <= 3) {
                    return true;
                }
                if ($n % 2 == 0 || $n % 3 == 0) {
                    return false;
                }
                for ($i = 5; $i * $i <= $n; $i += 6) {
                    if ($n % $i == 0 || $n % ($i + 2) == 0) {
                        return false;
                    }
                }
                return true;
            }

            $luku = $_POST["luku"];

            if (primenumber($luku)) {
                    echo "$luku on alkuluku";
            } else {
                    echo "$luku ei ole alkuluku";
            }
        ?>
    </body>
</html>  //visual studio itse ehdotti mulle tällä tavalla, enkä osannut itse kirjoittaa tätä, mutta ymmärrän kyllä mitä se tekee.
 //Se tarkistaa onko syötetty luku alkuluku vai ei.
 // en ymmärrä ihan mitä kohdassa for tapahtuu mutta se toimii