<?php 
require_once("../model/conexao.php");
require_once("../model/bancodeconexao.php");
include_once("../view/header.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(inserirEntrega($conexao,$numEntrega,$idClienteFK,$idProdutoFK)){
    echo ("As informaçõs da Entrega foram salvas");

}else{
echo("Alerta !!! As informações da Entrega Não foram salvas");

}

?>