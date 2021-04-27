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
    $_SESSION['mensagem-de-sucesso'] = "";
    $_SESSION['mensagem-da-categoria'] = "";
    header($location);
}
else if(strlen($nome) <= 2 && strlen($nome)> 0){
    $_SESSION['mensagem-de-erro'] = "O nome não pode ter menos de 2 caracteres";
    $_SESSION['mensagem-de-sucesso'] = "";
    $_SESSION['mensagem-da-categoria'] = "";
    header($location);
}else if (strlen($nome) > 40) {
    $_SESSION['mensagem-de-erro'] = "O nome não pode ter mais de 40 caracteres";
    $_SESSION['mensagem-de-sucesso'] = "";
    $_SESSION['mensagem-da-categoria'] = "";
    header($location);
}
 else if(!empty($nome) && !$idade){
    $_SESSION['mensagem-de-erro'] = "A idade não pode ser vazia";
    $_SESSION['mensagem-de-sucesso'] = "";
    $_SESSION['mensagem-da-categoria'] = "";
    header($location);
}
if(!empty($nome) && $idade >= 0) {
if($idade < 6 && !empty($nome)){
    $_SESSION['mensagem-da-categoria'] = "O nadador ".$nome." Não tem idade para competir em nenhuma categoria";
    $_SESSION['mensagem-de-erro'] = "Idade insuficiente, apenas maiores de 6 anos";
    $_SESSION['mensagem-de-sucesso'] = "";
    header($location);
}
else if($idade >= 6 && $idade <= 12){
    $_SESSION['mensagem-da-categoria'] = "O nadador ".$nome." compete na categoria: ".$categorias[0];
    $_SESSION['mensagem-de-sucesso'] = "Inscrição feita com sucesso";
    $_SESSION['mensagem-de-erro'] = "";
    header($location);
}
else if($idade >=13 && $idade < 18){
    $_SESSION['mensagem-da-categoria'] = "O nadador ".$nome." compete na categoria: ".$categorias[1];
    $_SESSION['mensagem-de-sucesso'] = "Inscrição feita com sucesso";
    $_SESSION['mensagem-de-erro'] = "";
    header($location);
}
else if($idade >= 18 && !empty($nome)) {
    $_SESSION['mensagem-da-categoria'] = "O nadador ".$nome." compete na categoria: ".$categorias[2];
    $_SESSION['mensagem-de-sucesso'] = "Inscrição feita com sucesso";
    $_SESSION['mensagem-de-erro'] = "";
    header($location);
}
}
?>