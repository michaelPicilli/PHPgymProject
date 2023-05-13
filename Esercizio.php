<?php
    class Esercizio {
        public $nome;
        public $focusArea;
        public $linkVideo;

        function __construct($nome, $linkVideo, $focusArea){
            $this->nome = $nome;
            $this->focusArea = $focusArea;
            $this->linkVideo = $linkVideo;
        }
    }
?>