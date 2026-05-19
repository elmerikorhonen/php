<!doctype html>
<html>
    <body>
        <?php

            $lampotila = $_GET["lampotila"];
            $muunnos = $_GET["muunnos"];

            if (!is_numeric($lampotila)) {
             echo "Virhe: anna numero";
             exit;
            }

            if ($lampotila > 20) {
                $color = 'red';
            } elseif ($lampotila < -20) {
                $color = 'blue';
            } elseif ($lampotila >= 0) {
                $color = 'green';
            } else {
                $color = 'yellow';
            }

            if ($muunnos == "CtoF") {

                $f = ($lampotila * 9 / 5) + 32;

                echo "<span style='color:$color'>";
                echo $lampotila . " C = " . $f . " F";
                echo "</span>";
            }

            // Celsius → Kelvin
            elseif ($muunnos == "CtoK") {

                $k = $lampotila + 273.15;

                echo "<span style='color:$color'>";
                echo $lampotila . " C = " . $k . " K";
                echo "</span>";
            }

            // Celsius → Celsius
            elseif ($muunnos == "CtoC") {

                echo "<span style='color:$color'>";
                echo $lampotila . " C = " . $lampotila . " C";
                echo "</span>";
            }


        ?>
  
        
    </body>
</html>