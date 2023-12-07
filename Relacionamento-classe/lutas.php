<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Relacionamento</title>
    </head>
    <body>
        <pre>
            <?php
                require_once "Lutador.php";
                $c1 = new Lutador("mario","EUA", 35, 1.90, 75.543, 11, 2, 5);
                print_r($c1);
                $c1->apresentar();
                $c1->perderluta();
                $c1->ganharLuta();
                $c1->empatarLuta();
                print_r($c1);
                $c1->apresentar();
            ?>
        </pre>
    </body>
</html>