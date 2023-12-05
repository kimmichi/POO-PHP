<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Mestodos especiais</title>
    </head>
    <body>
        <pre>
        <?php 
            require_once "Caneta.php";
            //Classe Caneta com () é o metodo Construtor
            $c1 = new Caneta();
            
            //Metodos GET e SET
            $c1->setModelo('Bic');
            print "Caneta do modelo ". $c1->getModelo();
            echo "<br>";
            $c1->setPonta(0.8);
            print "Ponta da canete ". $c1->getModelo()." e ". $c1->getPonta() ;
            print_r($c1);

            $c2 = new Caneta();
            $c2->Caneta('verde', 0.5);
            print_r($c2);
        ?>
        </pre>
    </body>
<html>