<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Objeto</title>
    </head>
    <body>
        <!--Obejto: coisas material ou abstrata que pode ser percebida pelos sentidos e descrita 
        por meio das CARACTERISTICAS, COMPORTAMENTO E ESTADO ATUAL (ATRIBUTOS, FUNCÃO ou metofo E ESTADO) -->

        <!-- Classe: forma, modelo, modelagem de um objeto. Que coisas eu tenho? Que coisas eu faço? Como estou agora? -->
            <!-- Que coisas eu tenho(Atributo)? (modelo, cor, ponta, carga, tampada)
                 Que coisa eu faço(Metodo)? (Escrever, Rabiscar, Pintar, Tampar, Destampar)
                 Como estou agora(Estado)? ( carga:50%, ponta: 0,5 , Cor: Azul, Destampada, escrevendo)-->
                 
        <!-- Instancia é quando um objeto é gerado a partir de uma classe 
            ([Obejeto] = new [Classe])
            ([Objeto].[Atributo] = "[valor]")
            ([Objeto].[Metodo]()) -->
        
        <?php
            /*Obejto*/
            require_once "Caneta.php";
            /*Instancia de um Objeto*/
            $c1 = new Caneta;
            /*Obejto*/
            $c1->cor = "Azul";
            $c1->ponta = 0.5;
            $c1->tampada = true; 
            
            /*metodo*/
            $c1->tampar();

            echo "<br>Caneta 01<br>";
            $c1->rabiscar();

            /*Instancia de um Objeto*/
            $c2 = new Caneta;
            /*Obejto*/
            $c2->cor = "Vermelha";
            $c2->ponta = 1.0;
            $c2->tampada = false; 
            /*metodo*/
            $c2->destampar();

            echo "<br>Caneta 02<br>";
            $c2->rabiscar();

            echo "<br>Caneta 01<br>";
            echo "<pre>";
            print_r($c1);
            echo "</pre>";

            echo "<br>Caneta 02<br>";
            echo "<pre>";

            print_r($c2);
            echo "</pre>";

        ?>
    </body>
</html>