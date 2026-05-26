<!doctype html>
<html>
    <head>
        <title>Palindromi</title>
    </head>
    <body>
        <?php
            function onkoPalindromi($teksti) {
                $teksti = strtolower($teksti);
                $teksti = str_replace(' ', '', $teksti);
                return $teksti === strrev($teksti);
            }

            $teksti = $_POST['teksti'];
            if (onkoPalindromi($teksti)) {
                echo "Teksti on palindromi.";
            } else {
                echo "Teksti ei ole palindromi.";
            }
        ?>
    </body>
</html> 