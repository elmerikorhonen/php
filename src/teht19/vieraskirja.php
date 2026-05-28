<!DOCTYPE html>
<html>
<head></head>
<body>
        <?php
            $tiedosto = "vieraskirja.txt";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nimi = $_POST["nimi"];
    $viesti = $_POST["viesti"];

    $file = fopen($tiedosto, "a");
    fwrite($file, $nimi . ": " . $viesti . "\n");
    fclose($file);
}
        ?>
        <form method="post">
    <input type="text" name="nimi"><br>
    <br>
    <textarea name="viesti"></textarea><br>
    <input type="submit" value="Lähetä">
</form>

<h3>Vieraskirja</h3>

<pre>
<?php
if (file_exists($tiedosto)) {
    echo htmlspecialchars(file_get_contents($tiedosto));
}
?>
</pre>
</body>
</html>