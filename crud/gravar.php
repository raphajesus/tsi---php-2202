<?php
//Buscamos o codigo que conecta SGBD
require_once '../bancoDeDados/conecta.php';
//Na linha 3 estamos trazendo todo o  codigo de
//../bandodeDados/conecta.php para este codigo
//include_once(); não gera erro fatal se não existir


//Dados provenientes do formulario HTML
$nome = $_POST['nome'];
$turno = $_POST['turno'];
$inicio = $_POST['inicio'];

$consulta = 
    $bd->prepare(' INSERT INTO alunos 
                (nome, turno, inicio)
                VALUES
                      (:nome, :turno, :inicio)');

  /*
  A função $bd->prepare() retorna
  outra variavel (objeto), essa outra variavel 
  consegue  juntar os dados
  do usuario com a consulta SQL
  */                    

  $consulta->bindParam('nome',$nome);
  $consulta->bindParam('turno',$turno);
  $consulta->bindParam('inicio',$inicio);

  /*
  Afunção $consulta->bindParam()substitui
  os rotulos (ex.:"nome") pelos dados inseguros
  */

  if($consulta->execute()){
    echo "GRAVOU COM SUCESSO";
  }else{
    echo "DEU ERRO";
  }
  //Finalmente executamos a nossa consulta SGBD
