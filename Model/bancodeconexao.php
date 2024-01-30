<?php
 
function inserirContato($conexao,$nomeContato,$foneContato,$cepContato,$cpfContato)
{
    $query = "insert into clientetb(nomeContato,foneContato,cepContato,cpfContato)values('{$nomeContato}','{$foneContato}','{$cepContato}','{$cpfContato}')";
    $result = mysqli_query($conexao, $query);
    return $result;
}

function inserirEncomenda($conexao,$nomeProduto,$estadoProduto)
{
    $query = "insert into produtotb(nomeProduto,estadoProduto)values('{$nomeProduto}','{$estadoProduto}')";
    $result = mysqli_query($conexao, $query);
    return $result;
}

function inserirEntrega($conexao,$numEntrega,$idClienteFK,$idProdutoFK)
{
    $query = "insert into entregatb(numEntrega,idClienteFK,idProdutoFK)values('{$numEntrega}','{$idClienteFK}','{$idProdutoFK}')";
    $result = mysqli_query($conexao, $query);
    return $result;
}
 
function buscarContato($conexao,$nomeContato)
{
    $query = "Select * from clientetb where nomeContato like '%{$nomeContato}%'";
    $result = mysqli_query($conexao,$query);
    return $result;
}
 
function buscarContatoID($conexao,$idContato){
    $query = "select * from clientetb where idContato = '{$idContato}'";
    $result = mysqli_query($conexao,$query);
    $result = mysqli_fetch_array($result);
    return $result;
}

function buscarProduto($conexao,$nomeProduto)
{
    $query = "Select * from produtotb where nomeProduto like '%{$nomeProduto}%'";
    $result = mysqli_query($conexao,$query);
    return $result;
}
 
function buscarProdutoID($conexao,$idProduto)
{
    $query = "select * from produtotb where idProduto = '{$idProduto}'";
    $result = mysqli_query($conexao,$query);
    $result = mysqli_fetch_array($result);
    return $result;
}


function buscarEntrega($conexao,$numEntrega)
{
    $query = "select entregatb.idEntrega, entregatb.numEntrega, clientetb.cepContato, produtotb.nomeProduto from entregatb INNER JOIN clientetb on entregatb.idClienteFK = clientetb.idContato INNER JOIN produtotb ON entregatb.idProdutoFK = produtotb.idProduto where entregatb.numEntrega like '%{$numEntrega}%'";
    $result = mysqli_query($conexao,$query);
    return $result;

   
}

function alterarContato($conexao, $idContato, $nomeContato, $foneContato, $cepContato, $cpfContato)
{
    $query = "update clientetb set nomeContato = '{$nomeContato}', foneContato = '{$foneContato}', cepContato = '{$cepContato}', cpfContato = '{$cpfContato}' where idContato = '{$idContato}'";
    $result = mysqli_query($conexao,$query);
    return $result;
   
}

function alterarContatoID($conexao, $idContato, $nomeContato, $foneContato, $cepContato, $cpfContato)
{
    $query = "update clientetb set idContato = '{$nomeContato}', foneContato = '{$foneContato}', cepContato = '{$cepContato}', cpfContato = '{$cpfContato}' where idContato = '{$idContato}'";
    $result = mysqli_query($conexao,$query);
    return $result;
   
}


function alterarEntregaID($conexao,$numEntrega,$idEntrega)
{
    $query = "update entregatb set numEntrega = '{$numEntrega}' where idEntrega = '{$idEntrega}'";
    $result = mysqli_query($conexao,$query);
    return $result;
   
}



function alterarEncomendaID($conexao, $idProduto, $nomeProduto, $estadoProduto)
{
    $query = "update produtotb set nomeProduto = '{$nomeProduto}', estadoProduto = '{$estadoProduto}' where idProduto = '{$idProduto}'";
    $result = mysqli_query($conexao,$query);
    return $result;
   
}