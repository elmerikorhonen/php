<!DOCTYPE html>
<html>
<head></head>  
<body>

    <?php
    $lampotila = $_GET["lampotila"];
    $fahrenheit = ($lampotila * 9 / 5) + 32;
    $celsius = ($fahrenheit - 32) * 5 / 9;

    $buttoni = $_GET["muunnin"];

    if ($buttoni == "cf")
    {
        echo "Fahrenheit lampotila on: " . $fahrenheit . "°F";
    }
    else if ($buttoni == "fc")
    {
        echo "Celsius lampotila on: " . $celsius . "°C";
    }
    ?>
</body>
</html>