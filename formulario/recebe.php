<?php

$nome = $_POST ['nomeUsuario'];
$idade = $_POST ['idadeUsuario'];
$cpf = $_POST ['cpfUsuario'];
$periodo = $_POST ['periodoUsuario'];



echo "Voce tem $nome,$idade,$cpf,$periodo ";




$arquivo = fopen('aluno.csv', 'a'); // abra o arquivo para append
fwrite($arquivo, "$nome,$idade,$cpf,$periodo\r\n");
fclose($arquivo);









