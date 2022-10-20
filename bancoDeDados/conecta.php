<?php



//Dados para  nos conectarmos ao SGBD
$dsn = 'mysql:dbname=senac;host=localhost;port=3301';
$user = 'root';
$pass = '';

//conectando SGBD
$bd = new PDO($dsn, $user, $pass);

