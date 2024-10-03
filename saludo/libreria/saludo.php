<?php
    class Saludo{
        private $saludar;

        public function __construct($saludar){
            $this->saludar=$saludar;
        }

        public function setSaluda (): void{
            $this->saludar;

        }

        public function getSaludar(): mixed{
            return $this->saludar;
        }
    }
?>