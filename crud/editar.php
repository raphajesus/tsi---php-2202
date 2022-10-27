<?php
require_once '../bancoDeDados/conecta.php';



$id = $_POST['id'] ?? 0;

$stmt = $bd->prepare(' SELECT
                           id, nome, turno, inicio
                       FROM 
                           alunos
                        WHERE
                           id = :id');
  $stmt->bindParam(':id', $id);

  $stmt->execute();

  $aluno = $stmt->fetch(PDO::FETCH_ASSOC);

  //mostrar um formulario HTML para o usuario
  // com os dados do aluno selecionado para
  // ser editado

  //AO clicar "gravar" no formulario fazer
  //o update no banco e volatar para a
  //index com uma mensagem de erro ou
  //sucesso
//include 'index.php';

var_dump($aluno);







