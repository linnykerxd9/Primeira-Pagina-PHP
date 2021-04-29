<?php
function validarCategoriaCompetidor(string $nome, string $idade): ?string {
    $categorias  = [];
    $categorias[] = "infantil";
    $categorias[] = "adolescente";
    $categorias[] = "adulto";

if(validaNome($nome) && validaIdade($nome,$idade)){
      removerMensagemErro();
      removerMensagemErro2();
    if($idade >= 6 && $idade <= 12){
        setaMensagemCategoria("O nadador ".$nome." compete 'na categoria: ".$categorias[0]);
        setaMensagemSucesso("Inscrição feita com sucesso");
        return null;
    }
    else if($idade >=13 && $idade < 18){
        setaMensagemCategoria("O nadador ".$nome." compete na categoria: ".$categorias[1]);
        setaMensagemSucesso("Inscrição feita com sucesso");
        return null;
    }
    else if($idade >= 18 && !empty($nome)) {
        setaMensagemCategoria("O nadador ".$nome." compete na categoria: ".$categorias[2]);
        setaMensagemSucesso("Inscrição feita com sucesso");
        return null;
    }
  }
  else {
      removerMensagemCategoria();
      removerMensagemSucesso();
      return obterMensagemErro();
  }
}