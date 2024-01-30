<?php 
require_once("../model/conexao.php");
require_once("../model/bancodeconexao.php");
include_once("../view/header.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(alterarEncomendaID($conexao, $idProduto,$nomeProduto, $estadoProduto)){
    echo ("As informaçõs do Produto foram salvas");

}else{
echo("Alerta !!! As informações do Produto Não foram alteradas");

}

?>