<?php 
require_once("../model/conexao.php");
require_once("../model/bancodeconexao.php");
include_once("../view/header.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(alterarContato($conexao, $idContato,$nomeContato, $foneContato,$cepContato,$cpfContato)){
    echo ("As informaçõs do Contato foram salvas");

}else{
echo("Alerta !!! As informações do Contato Não foram alteradas");

}

?>