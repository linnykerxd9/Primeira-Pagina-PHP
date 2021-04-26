<?php

$categorias  = [];
$categorias[] = "infantil";
$categorias[] = "adolescente";
$categorias[] = "adulto";

session_start();

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$location = 'location: ../index.php';

if(empty($nome)){
    $_SESSION['mensagem-de-erro'] = "O nome não pode ser vazio";
    header($location);
}
else if(strlen($nome) <= 2 && strlen($nome)> 0){
    $_SESSION['mensagem-de-erro'] = "O nome não pode ter menos de 2 caracteres";
    header($location);
}
else if(strlen($nome) > 40) {
    $_SESSION['mensagem-de-erro'] = "O nome não pode ter mais de 40 caracteres";
    header($location);
}

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