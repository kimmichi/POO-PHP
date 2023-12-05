<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Visibilidade</title>
    </head>
    <body>
    <pre>
    <?php
        require_once "Caneta.php";
        $c1 =  new Caneta;
        $c1->modelo = "BIC";
        $c1->cor = "verde";
        /*$c1->ponta = 0.4; atributo privado precisa de emcapsular*/
        /*Atribustos privados so podem ser modificados dentro da propia classe*/
        print_r($c1);
    ?>
    </pre>
    </body>
</html>