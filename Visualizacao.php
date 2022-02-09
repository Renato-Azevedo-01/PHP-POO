<?php
require_once 'Video.php';
require_once 'Gafanhoto.php';
class Visualizacao {
    //Atributos
    private $espectador;
    private $filme;
    
    public function __construct($espectador, $filme) {
        $this->espectador = $espectador;
        $this->filme = $filme;
        $this->filme->setViews($this->filme->getViews() + 1);
        $this->espectador->setTotAssistido($this->espectador->getTotassistido() + 1);      
    }
    public function avaliar() {
        //$this->filme->setAvaliacao($this->filme->getAvaliacao() + 5);
        $this->filme->setAvaliacao(5);
        echo '<p>Avaliação -> foi nota ' . $this->filme->getAvaliacao() . ' para o setAvaliação : </p>' ;
        echo '<p>A média está em : ' . $this->filme->getAvaliacao() . ' ! </p>' ;        
    }
    public function avaliarNota($nota){
        $this->filme->setAvaliacao($nota);
    }
    public function avaliarPerc($perc) {
        $nota = 0;
        if($perc <= 20){
            $nota = 3;
        }
        elseif ($perc <= 50) {
            $nota = 5;
        }
        elseif ($perc <=90) {
            $nota = 8;
        }
        else{
            $nota = 10;
        }
        
        $this->filme->setAvaliacao($nota);
    }
    public function getEspectador() {
        return $this->espectador;
    }
    public function getFilme() {
        return $this->filme;
    }
    public function setEspectador($espectador) {
        $this->espectador = $espectador;
    }
    public function setFilme($filme) {
        $this->filme = $filme;
    }
}
