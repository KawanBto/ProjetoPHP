<?php
require_once("../model/conexao.php");
require_once("../model/bancodeconexao.php");
include_once("../view/header.php");
 
extract($_REQUEST,EXTR_OVERWRITE);
 
buscarProduto($conexao,$nomeProduto);
 
?>