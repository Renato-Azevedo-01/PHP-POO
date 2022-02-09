<?php
    require_once 'AcoesVideo.php';
    
    class Video implements AcoesVideo {
        //Atributos
        private $titulo;
        private $avaliacao;
        private $views;
        private $curtidas;
        private $reproduzindo;
        //Métodos  
        public function __construct($titulo) {
            $this->titulo = $titulo;
            $this->reproduzindo = false;
            $this->curtidas=0;
            $this->views = 0;
            $this->avaliacao= 0;
        }
        public function like() {
            $this->curtidas++;
        }
        public function pause() {
            $this->reproduzindo = false;
            echo '<p>Vídeo pausado</p>';
        }
        public function play() {
            $this->reproduzindo= true;    
            echo '<p>Vídeo Tocando</p>';
        }
        public function getTitulo() {
            return $this->titulo;
        }
        public function getAvaliacao() {
            return $this->avaliacao;
        }
        public function getViews() {
            return $this->views;
        }
        public function getCurtidas() {
            return $this->curtidas;
        }
        public function getReproduzindo() {
            return $this->reproduzindo;
        }
        public function setTitulo($titulo) {
            $this->titulo = $titulo;
        }
        public function setAvaliacao($avaliacao) {
            echo '<p>Recebido $avaliação = ' . $avaliacao . '</p>';
            echo '<p>This Avaliação = ' . $this->avaliacao . '</p>';
            echo '<p>Tot views : ' . $this->views . '</p>';
            $media = ($this->avaliacao + $avaliacao)/ $this->views;
            $this->avaliacao = $media;
            echo '<p>Média = ' . $media . '</p>';
        }
        public function setViews($views)  {
            $this->views = $views;
        }
        public function setCurtidas($curtidas) {
            $this->curtidas = $curtidas;
        }
        public function setReproduzindo($reproduzindo) {
            $this->reproduzindo = $reproduzindo;
        }
    }
