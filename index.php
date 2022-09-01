<?php
echo 'Olá mundo!';
//comentario de linha
$nome = 'Rafael oliveira';
echo "ola $nome";
//comentario de linha

#comentario de linha


// DOCUMENTAÇÃO DO PHP FICA EM: https://www.php.net

for ($i = 1 ; $i < 10 ; $i++){
   echo "Rafael Oliveira <br>";
}

$i = 1;
for (; ; ){
    if ($i >10){
        break;
    }
    echo "Rafael <br>";
    $i++;
}


$i = 1;

while ($i <= 10):
  echo "Rafael <br>";
  $i++;
endwhile
?>

<?php
$i = 1;

do {
  echo "Rafael olieira <br>";
  $i++;
}while ($i <= 10);
?>

<?php

if(5 > 10){
echo"cinco é maior que dez";
}else{
    echo "cinco é maior que dez";
}

$diasemna = 0;
    switch($diasemna){
        case 0:
        echo "domingo";
        break;
        case 1:
        echo "Segunda";
        break;
        case 2:
        echo "Terça";
        break;
        case 3:
        echo "Quarta";
        break;
        case 4:
        echo "Quinta";
        break;
        case 5:
        echo "Sexta";
        break;
        case 6:
        echo "Sabado";
        break;
        case 7:
        echo "domingo";
        break;
}
// fim condicionais


    