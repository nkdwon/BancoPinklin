<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="ISO 8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Banco Pinklin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    

<?php 

    require_once("ContaCorrente.php");
    require_once("Moeda.php");
    require_once("ContaPoupanca.php");



    echo " <div class=\"ContaCorrente\">  CONTA CORRENTE   <br> </div>";
    echo "<div class=\"DadosCorrente\">";
    $cc = new ContaCorrente(123456789, "Felipe");
    echo $cc->get_numeroConta(), "<br>";
    echo $cc->get_nomeTitular(), "<br>";
    echo Moeda::converteReal($cc->get_saldo()), "<br>";
    $cc->depositar(9000.00);
    echo Moeda::converteReal($cc->get_saldo()), "<br>";
    echo $cc->sacar(3000.00), "<br>";
    echo $cc->sacar(2500.00), "<br>";
    echo Moeda::converteReal($cc->get_saldo()), "<br>";
    $cc->mudarClasseGold();
    echo $cc->get_classe(), "<br>"; 
    echo "</div>"; 

    echo " <div class=\"ContaPoupanca\">  CONTA POUPANÇA   <br> </div> ";
    echo "<div class=\"DadosPoupanca\">";
    $cp = new ContaPoupanca(6666666, "Gabriel");
    echo $cp->get_numeroConta(), "<br>";
    echo $cp->get_nomeTitular(), "<br>";
    echo Moeda::converteReal($cp->get_saldo()), "<br>";
    $cp->depositar(10.00);
    echo Moeda::converteReal($cp->get_saldo()), "<br>";
    $cp->aplicarJurosMes();
    echo Moeda::converteReal($cp->get_saldo()), "<br>";
    echo "</div>";
?>







</body>
</html>