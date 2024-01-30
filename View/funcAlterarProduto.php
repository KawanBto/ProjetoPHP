<?php
include_once("header.php");
require_once("../model/conexao.php");
require_once("../model/bancodeconexao.php");      

extract($_REQUEST,EXTR_OVERWRITE);
$idProduto = isset($idProduto) ? $idProduto : "";
if($idProduto){
  $produto = buscarProdutoID($conexao,$idProduto);
  
?>

<div class="container">
    <form class="row g-3" method="get" action="../Controller/alterarEncomenda.php">
    <input type="hidden" value= "<?php echo($produto["idProduto"]);?>" name ="idProduto">
        <div class="col-md-6">
            <label for="inputProduto" class="form-label">Nome do Produto</label>
            <input type="text" class="form-control" value= "<?php echo($produto["nomeProduto"]);?>" name ="nomeProduto" id="inputProduto">
        </div>

        <div class="col-md-6">
            <label for="inputEstado" class="form-label">Estado do Produto</label>
            <input type="text" class="form-control" value= "<?php echo($produto["estadoProduto"]);?>" name = "estadoProduto" id="inputEstado">
        </div>
    
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Alterar</button>
        </div>
    </form>
</div>

<?php
} else {
    echo ("Dados não encontrados");
}
include_once("footer.php");
?>