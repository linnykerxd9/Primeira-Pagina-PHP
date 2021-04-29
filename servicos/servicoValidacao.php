<?php

function validaNome(string $nome):bool {
    if(empty($nome)){
       setaMensagemErro("O nome não pode ser vazio");
        return false;
    }
    else if(strlen($nome) <= 2 && strlen($nome)> 0){
        setaMensagemErro("O nome não pode ter menos de 2 caracteres");
        return false;
    }else if (strlen($nome) > 40) {
        setaMensagemErro("O nome não pode ter mais de 40 caracteres");
        return false;
    }
    return true;
}
function validaIdade(string $nome,string $idade):bool {

     if(!empty($nome) && !$idade){
        setaMensagemErro("A idade não pode ser vazia");
        return false;
    }
    else if($idade < 6 && !empty($nome)){
        setaMensagemErro("Idade insuficiente, apenas maiores de 6 anos");
        setaMensagemErro2("O nadador ".$nome." Não tem idade para competir em nenhuma categoria");
        return false;
    }
    return true;
}