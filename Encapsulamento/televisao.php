<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Encapsulamento</title>
    </head>
    <body>
        <pre>
            <?php
                require_once "ControleRemoto.php";
                $c1 = new ControleRemoto();
                $c1->maisVolume();
                print $c1->getVolume();
            
            
            
            ?>
        </pre>
    </body>
</html>