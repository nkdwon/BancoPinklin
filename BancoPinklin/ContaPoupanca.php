<?php 
    require_once("ContaBancaria.php");

    class ContaPoupanca extends ContaBancaria{

        public function aplicarJurosMes(){
            $juros = $this->saldo * 0.5 / 100;
            $this->saldo -= $juros;
        }

    }































?>