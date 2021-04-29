<?php

include("../servicos/servicoMensagemSessao.php");
include("../servicos/servicoCategoria.php");
include("../servicos/servicoValidacao.php");

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$location = 'location: ../index.php';

validarCategoriaCompetidor($nome,$idade);
header($location);
?>