<?php 
        require_once("ContaBancaria.php");

        class ContaCorrente extends ContaBancaria{
            private $classe = "silver";

            public function mudarClasseSilver(){
                $this->classe = "silver";
            }

            public function mudarClasseGold(){
                $this->classe = "gold";
            }

            public function mudarClasseBlack(){
                $this->classe = "black";
            }

            public function get_classe(){
                return $this->classe;
            }
    }

































?>