<?php

$categorias  = [];
$categorias[] = "infantil";
$categorias[] = "adolescente";
$categorias[] = "adulto";

//print_r($categorias);

$nome = "Jonas";
$idade = 8;

//var_dump($nome);
//var_dump($idade);

if($idade >= 6 && $idade <= 12){
    echo "O nadador ",$nome, " compete na categoria:" ,$categorias[0];
}
else if($idade >=13 && $idade < 18){
    echo "O nadador ",$nome, " compete na categoria:" ,$categorias[1];
}
else {
    echo "O nadador ",$nome, " compete na categoria:" ,$categorias[2];
}

?>