<?php

class Caneta{
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;
    
    function rabiscar() {
        if ($this->tampada == true){
            echo "<p>Não pode rabiscar... Caneta tampada</p>";
        } else {
            echo "<p>Rabiscando...</p>";
        }
    }
    function tampar() {
        $this->tampada = true;

    }
    function destampar() {
        $this->tampada = false;
    }
}



?>