<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>exercicio 1</title>
    </head>
    <body>
        <pre>
        <?php 

            require_once "Conta.php";
            $c1 = new Conta();
            $c1->Conta(321,"cp","joao", 500000000000.50,true);
            //$c1->Conta(null,null,null,null);
            
            $c1->depositar(1000);
            $c1->sacar(5);
            $c1->sacar(50000000000000);
            $c1->pagarMensal();
            $c1->fecharconta();

            echo "<br>";
            print_r($c1);

        ?>
        </pre>
    </body>
</html>