<?php

class Caneta{
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;
    
    public function rabiscar() {
        if ($this->tampada == true){
            echo "<p>Não pode rabiscar... Caneta tampada</p>";
        } else {
            echo "<p>Rabiscando...</p>";
        }
    }
    private function tampar() {
        $this->tampada = true;

    }
    private function destampar() {
        $this->tampada = false;
    }
    //Um metodo publico pode ser chamado no index e pode modificar atributos privados sem erro
}



?>