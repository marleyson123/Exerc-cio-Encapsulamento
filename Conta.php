<?php
class Conta{ //classe
   private $nome;
   private $numero;
   private $saldo;

   public function setNome($nome){
      $this->nome = $nome;
   }
   public function getNome(){
      return $this->nome;
   }

   public function setNumero($numero){//insere as informação no atributo
    $this->numero = $numero;
   }
   public function getNumero(){//recuperar a informaçõa do atributo
    return $this->numero;
   }
  
   
   public function depositar($depositar){
    $this->saldo += $depositar;
   }
   public function getSaldo(){
    return $this->saldo;
   }

   public function sacar($valor){
      //adicionar a restriçao
      if($valor <= $this->saldo){
         $this->saldo -= $valor;
      }else{
         echo"<br>Saldo insuficiente<br>";
      }
      
   }

}


?>