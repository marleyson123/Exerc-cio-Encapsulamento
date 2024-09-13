<?php
 include 'Conta.php';

 $conta1 = new Conta();
$nome = 'Marleyson';
 $numConta = 123456;
 $deposito1 = 1000.00;

 $conta1->setNome($nome);

 $conta1->setNumero($numConta);


 $conta1->depositar(depositar: $deposito1);

 $conta1->sacar(50);

 echo "Nome do cliente:".$conta1->getNome(). "<br>Numero da conta: ".$conta1->getNumero()."<br>Valor da conta: ".$conta1->getSaldo();

?>