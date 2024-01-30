<?php 
require_once("../model/conexao.php");
require_once("../model/bancodeconexao.php");
include_once("../view/header.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(inserirEncomenda($conexao,$nomeProduto,$estadoProduto)){
    echo ("As informaçõs do Produto foram salvas");

}else{
echo("Alerta !!! As informações da Encomenda Não foram salvas");

}

?>