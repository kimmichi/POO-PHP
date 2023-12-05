<?php
    class Caneta{
        public $modelo;
        private $ponta;
        public $cor;
        private $tampada;

        //Metodo construtor 
        public function Caneta($c, $p){
            $this->setModelo($c);
            $this->cor = $p;
            $this->tampada = true;

        }

        //Metodos Get e SET de cada atributo
        public function getModelo(){
            return $this->modelo;

        }

        public function setModelo($m){
            $this->modelo = $m;

        }

        public function getPonta(){
            return $this->ponta;

        }

        public function setPonta($p){
            $this->ponta = $p;
        }
    }
?>