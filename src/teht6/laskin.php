<!doctype html>
<html>
    <head>
        <title>Laskin</title>
    </head>
    <body>
        <?php
            $säde = $_POST['säde'];
            function tilavuus($säde) {
                $pii = 3.1415927;
                return (4* $pii * ($säde * $säde * $säde)) / 3;
            }           
            $tilavuus = tilavuus($säde);
            echo 'Pallon tilavuus on '.$tilavuus;
        ?>
    </body>
</html>