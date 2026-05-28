<!doctype html>
<html>
    <body>
        <?php
            function tulosta($teksti){
               return 'moi'.$teksti;
            }

            $kokoteksti = tulosta('elmeri');
            echo $kokoteksti;
        ?>
    </body>
</html>