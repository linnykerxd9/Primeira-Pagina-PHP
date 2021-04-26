
<?php

$categorias  = [];
$categorias[] = "infantil";
$categorias[] = "adolescente";
$categorias[] = "adulto";

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome)){
    echo "O nome não pode ser vazio";
    return;
}
if(strlen($nome) <= 2){
    echo "O nome não pode ter menos do que 2 caracteres";
    return;
}
if(strlen($nome) > 40) {
    echo "O nome é muito extenso";
    echo " O nome não pode ter mais do que 40 caracteres";
    return;
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