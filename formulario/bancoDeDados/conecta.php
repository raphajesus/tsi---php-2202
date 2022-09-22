<?php

$dsn = 'mysql:dbname=senac;host=localhost;port=3307';
$user = 'rafael';
$pass = '12345678';

//conectando SGBD
$bd = new PDO($dsn, $user, $pass);

var_dump($bd);