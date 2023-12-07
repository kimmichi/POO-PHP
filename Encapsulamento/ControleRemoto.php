<?php 
require_once "Controlador.php";
class ControleRemoto implements Controlador {
    private $volume;
    private $ligar;
    private $tocando;

    function __construct(){
        $this->volume = 50;
        $this->ligado = true;
        $this->tocando = false;
    }

    public function getVolume(){
        return $this->volume;
    }
    public function setVolume($v){
        $this->volume = $v;
    }
    
    public function getLigar(){
        return $this->volume;
    }
    public function setLigar($l){
        $this->ligar = $l;
    }

    public function getTocando(){
        return $this->tocando; 
    }
    public function setTocando($t){
        $this->tocando = $t;
    }

    
    public function ligar(){
        $this->ligar = true;
    }
    public function desligar(){
        $this->ligar = false;
    }   
    public function abrirMenu(){
        echo "<p>esta ligado?</p> ". ($this->getLigar()?"SIM":"NAO");
        echo "<p>esta tocando?</p> ". ($this->getTocando()?"SIM":"NAO");
        echo "<p>Volume:</p> ". $this->getVolume();
        for ($i=0; $i <= $this->getVolume() ; $i+=10) { 
            echo "|";
        }
        echo "<br>";
    }
    public function fecharMenu(){
        echo "fechando menu";
    }
    public function maisVolume(){
        echo ($this->getLigar())?$this->setVolume($this->getVolume() + 5):"TV Desligada";

    }
    public function menosVolume(){
        echo ($this->getLigar())?$this->setVolume($this->getVolume() - 5):"TV Desligada";

    }
    public function ligarMudo(){

    }
    public function desligarMudo(){

    }
    public function play (){

    }
    public function pause(){

    }

}


?>