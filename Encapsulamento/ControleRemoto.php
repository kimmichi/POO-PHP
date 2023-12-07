<?php 
require_once "Controlador.php";
class ControleRemoto implements Controlador {
    private $volume;
    private $ligar;
    private $tocando;

    function __construct(){
        $this->volume = 0;
        $this->ligado = false;
        $this->tocando = false;
    }

    private function getVolume(){
        return $this->volume;
    }
    private function setVolume($v){
        $this->volume = $v;
    }
    
    private function getLigado(){
        return $this->volume;
    }
    private function setLigado($l){
        $this->ligar = $l;
    }

    private function getTocando(){
        return $this->tocando; 
    }
    private  function setTocando($t){
        $this->tocando = $t;
    }

    
    public function ligar(){
        $this->ligar = true;
    }
    public function desligar(){
        $this->ligar = false;
    }   
    public function abrirMenu(){
        echo "<p>esta ligado?</p> ". ($this->getLigado()?"SIM":"NAO");
        echo "<p>esta tocando?</p> ". ($this->getTocando()?"SIM":"NAO");
        echo "<p>Volume:</p> ". $this->getVolume()." ";
        for ($i=5 ; $i <= $this->getVolume() ; $i+=5) { 
            echo "|";
        }
        echo "<br>";
    }
    public function fecharMenu(){
        echo "fechando menu";
    }
    public function maisVolume(){
        echo ($this->getLigado())?$this->setVolume($this->getVolume() + 5):"TV Desligada";

    }
    public function menosVolume(){
        echo ($this->getLigado())?$this->setVolume($this->getVolume() - 5):"TV Desligada";

    }
    public function ligarMudo(){
        if ($this->getLigado() && $this->getVolume()>0){
            $this->setVolume(0);
            echo "<p>Mudo ligado ". $this->getVolume() ."</p>" ;
        }

    }
    public function desligarMudo(){
        if ($this->getLigado() && $this->getVolume() > 0){
            $this->setVolume(50);
            echo "<p>Mudo desligado ". $this->getVolume() ."</p>" ;

        }

    }
    public function play (){
        if($this->getLigado() && !$this->getTocando()){
            $this->setTocando(true);
            echo "Tocando on <br>";
        }

    }
    public function pause(){
        if($this->getLigado() && $this->getTocando()){
            $this->setTocando(false);
            echo "Tocando off <br>";
        }
    }

}


?>