<?php 


class ContaBancaria {
    private $numeroConta = 0;
    private $nomeTitular = "";
    protected $saldo = .0;

    public function __construct($numeroConta, $nomeTitular){

        $this->numeroConta = $numeroConta;
        $this->nomeTitular = $nomeTitular;
    }

    public function depositar($valor){
        if($valor < 0){
            return " Saldo Inválido ";
        } else{
        $this->saldo += $valor;
            return " Depósito bem sucedido ";
        }
    }

    public function sacar($valor){
        if($valor < 0.0){
            return  " Valor não pode ser negativo ";
        }else if($this->saldo - $valor < 0.0){
            return  " Saldo Inválido ";
        }else {
            $this->saldo -= $valor; 
            return "Saque bem sucedido" ;
        }
    }

    public function get_saldo(){
        return $this->saldo;
    }

    public function get_nomeTitular(){
        return $this->nomeTitular;
    }

    public function get_numeroConta(){
        return $this->numeroConta;
    }

}


?>