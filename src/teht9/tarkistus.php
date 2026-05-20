<?php

$kayttaja = $_POST["kayttaja"];
$salasana = $_POST["salasana"];

$oikea_kayttaja = "opiskelija";
$oikea_salasana = "salasana123";

if ($kayttaja == $oikea_kayttaja && $salasana == $oikea_salasana) {
    echo "Kirjautuminen onnistui";
} else {
    echo "Kirjautuminen epäonnistui";
}

?>