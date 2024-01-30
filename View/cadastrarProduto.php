<?php
include_once("header.php");
?>

<div class="container">
    <form class="row g-3" method="Post" action="../controller/adicionarEncomenda.php">
        <div class="col-md-6">
            <label for="inputNome" class="form-label">Nome do Produto</label>
            <input type="text" class="form-control" name ="nomeProduto" id="inputProduto">
        </div>

        <div class="col-md-3">
            <label for="inputFone" class="form-label">Estado do Produto</label>
            <input type="text" class="form-control"name = "estadoProduto" id="inputEstado">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>
</div>

<?php
include_once("footer.php");
?>