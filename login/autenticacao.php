<?php

//Buscamos o codigo que conecta no SGBD
require_once '../bancoDeDados/conecta.php';

$email = $_POST['usuario'];//trim() tira espaços do começo e do final
$senha = $_POST['senha'];

$stmt = $bd->prepare(" SELECT 
                          nome,senha
                          FROM
                          usuarios
                          WHERE
                          email = :email");
                          
                          
$stmt->bindParam(':email',$email);

$stmt->execute();

$usuarios = $stmt->fetch(PDO::FETCH_ASSOC);

$autenticou = false;

if( isset($usuario['nome']) ){

};

include 'index.php';