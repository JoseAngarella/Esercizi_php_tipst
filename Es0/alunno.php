<?php
    class alunno{
        private $nome;
        private $cognome;
        private $eta;



        public function getnome(){
            return $this->nome;
        }

        public function getcognome(){
            return $this->cognome;
        }

        public function geteta(){
            return $this->eta;
        }

        public function setnome($nome){
             $this->nome=$nome;
        }

        public function setcognome($cognome){
            $this->cognome=$cognome;
        }

        public function seteta($eta){
            $this->eta=$eta;
        }

        public function toString(){
            return "alunno ".$this->nome." ". $this->cognome." eta: ".$this->eta;
        }




        
    }

?>