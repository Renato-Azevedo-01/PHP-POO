<?php
abstract class Pessoa {
    //Atributos
    protected $nome;
    protected $idade;
    protected $sexo;
    protected $experiencia;
    //Métodos
    public function ganharExp($n){
       $this->experiencia += $n;
       echo '<p>Ganhei experiência</p>';
    }
    public function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->experiencia = 0;
    }
    public function getNome() {
        return $this->nome;
    }
    public function getIdade() {
        return $this->idade;
    }
    public function getSexo() {
        return $this->sexo;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function setIdade($idade) {
        $this->idade = $idade;
    }
    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }
}
