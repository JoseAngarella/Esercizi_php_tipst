<?php
    class Persona{
        private $nome;
        private $cognome;

        public function __construct($nome, $cognome){
            $this->nome=$nome;
            $this->cognome=$cognome;
        }


        public function getnome(){
            return $this->nome;
        }

        public function getcognome(){
            return $this->cognome;
        }

        public function presentati(){
            return "nome: {$this->nome} cognome : {$this->cognome}";
        }


    }


?>


