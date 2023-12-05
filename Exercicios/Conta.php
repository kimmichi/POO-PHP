<?php 
    class Conta {
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        Private $status;
        
        public function Conta($num, $tip, $don, $sal,$sta){
            $this->setnumConta($num);
            $this->settipo($tip);
            $this->setdono($don);
            $this->setsaldo($sal);
            $this->setstatus($sta);

        }
        public function getnumConta(){
            return $this->numConta;
        }
        public function setnumConta($nc){
            $this->numConta = $nc;
        }
        public function gettipo(){
            return $this->tipo;
        }
        public function settipo($t){
            $this->tipo = $t;
        }
        public function getdono(){
            return $this->dono;
        }
        public function setdono($d){
            $this->dono = $d;
        }
        public function getsaldo(){
            return $this->saldo;
        }
        public function setsaldo($s){
            $this->saldo = $s;
        }
        public function getstatus(){
            return $this->status;
        }
        public function setstatus($st){
            $this->status = $st;
        }

        public function abrirConta (){
            if ($this->getsaldo() == 0) {
                $this->setstatus(true);
                
            }
        }

        public function fecharConta(){
            if ($this->getsaldo() == 0){
                $this->setstatus(false);
            }
            elseif($this->getsaldo() < 0){
                print "voce esta devendo dinheiro";
                echo "<br>";
            }
            else {
                print "voce ainda tem dinheiro em conta";
                echo "<br>";
            }
        }

        public function depositar($dep){
            $this->saldo = $this->saldo + $dep;
        }

        public function sacar($sac){
            if($sac > $this->saldo){
                print "saldo insuficiente";
                echo "<br>";
            }
            else{
                $this->saldo = $this->saldo - $sac;
            }
        }
        public function pagarMensal(){
            $this->saldo = $this->saldo - 20;
        }

    }

?>