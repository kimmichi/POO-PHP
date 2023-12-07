<?php
    require_once "Show.php";
    class Lutador implements Show {
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $vitorias;
        private $derrotas;
        private $empates;

        function __construct($no,$na,$id,$al,$pe,$vi,$de,$em){
            $this->setNome($no);
            $this->setNacionalidade($na);
            $this->setIdade($id);
            $this->setAltura($al);
            $this->setPeso($pe);
            $this->setVitorias($vi);
            $this->setDerrotas($de);
            $this->setEmpates($em);
        }

        private function getNome(){
            return $this->nome;
        }
        private function getNacionalidade(){
            return $this->nacionalidade;
        }
        private function getIdade(){
            return $this->idade;
        }
        private function getAltura(){
            return $this->altura;
        }
        private function getPeso(){
            return $this->peso;
        }
        private function getVitorias(){
            return $this->vitorias;
        }
        private function getDerrotas(){
            return $this->derrotas;
        }
        private function getEmpates(){
            return $this->empates;
        }


        private function setNome($no){
            $this->nome = $no;
        }
        private function setNacionalidade($na){
            $this->nacionalidade = $na;
        }
        private function setIdade($id){
            $this->idade = $id;
        }
        private function setAltura($al){
            $this->altura = $al ;
        }
        private function setPeso($pe){
            $this->peso = $pe;
        }
        private function setVitorias($vi){
            $this->vitorias = $vi;
        }
        private function setDerrotas($de){
            $this->derrotas = $de;
        }
        private function setEmpates($em){
            $this->empates = $em;
        }

        public function apresentar(){
            echo "Esse e o ". $this->getNome() ." de ". $this->getIdade() ." anos, com ".  $this->getAltura() ." de altura, pesando ". $this->getPeso() ." veio do ". $this->getNacionalidade() ." possui ". $this->getVitorias() ." vitorias, ". $this->getDerrotas() . " derrotas e ". $this->getEmpates() ." empates ";    
        }
        
        public function status(){

        }
        public function ganharLuta(){
            $this->setVitorias($this->getVitorias() + 1);

        }
        public function perderLuta(){
            $this->setDerrotas($this->getDerrotas() + 1);

        }
        public function empatarLuta(){
            $this->setEmpates($this->getEmpates() + 1);

        }
    }

?>