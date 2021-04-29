<?php

session_start();

function setaMensagemErro(string $mensagem) {
    $_SESSION['mensagem-de-erro'] = $mensagem;
}

function obterMensagemErro(): ?string{
    if(isset($_SESSION['mensagem-de-erro'])){
        return $_SESSION['mensagem-de-erro'];
    }
    return null;
}

function setaMensagemSucesso(string $mensagem){
    $_SESSION['mensagem-de-sucesso'] = $mensagem;
}

function obterMensagemSucesso(): ?string{
    if(isset($_SESSION['mensagem-de-sucesso'])){
        return $_SESSION['mensagem-de-sucesso'];
    }
    return null;
}


function setaMensagemCategoria(string $mensagem) {
    $_SESSION['mensagem-da-categoria'] = $mensagem;
}

function obterMensagemCategoria(): ?string{
    if(isset($_SESSION['mensagem-da-categoria'])){
        return $_SESSION['mensagem-da-categoria'];
    }
    return null;
}
function removerMensagemCategoria():void {
    if(isset($_SESSION['mensagem-da-categoria'])){
        unset($_SESSION['mensagem-da-categoria']);
    }
}

function setaMensagemErro2(string $mensagem) {
    $_SESSION['mensagem-de-erro2'] = $mensagem;
}
function obterMensagemErro2(): ?string{
    if(isset($_SESSION['mensagem-de-erro2'])){
        return $_SESSION['mensagem-de-erro2'];
    }
    return null;
}
function removerMensagemErro2():void {
    if(isset($_SESSION['mensagem-de-erro2'])){
        unset($_SESSION['mensagem-de-erro2']);
    }
}
function removerMensagemErro():void {
    if(isset($_SESSION['mensagem-de-erro'])){
        unset($_SESSION['mensagem-de-erro']);
    }
}
function removerMensagemSucesso():void {
    if(isset($_SESSION['mensagem-de-sucesso'])){
        unset($_SESSION['mensagem-de-sucesso']);
    }
}