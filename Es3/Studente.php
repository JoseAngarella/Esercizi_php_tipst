<?php

    require_once("Persona.php");

    class Studente extends Persona{
        private $matricola;

        public function __construct($nome,$cognome,$matricola){
            parent::__construct($nome,$cognome);
            $this->matricola = $matricola;
        }

        public function getmatricola(){
            return $this->matricola;
        }

        public function presentati(){
            
            return parent::presentati().", matricola : {$this->matricola}";
        }
    }


?>