<?php
include_once("header.php");
?>

<div class="container">
    <form class="row g-3" method="Post" action="../controller/adicionarEntrega.php">
        <div class="col-md-4">
            <label for="inputNum" class="form-label">Numeração da encomenda</label>
            <input type="text" class="form-control" name ="numEntrega" id="inputEntrega">
        </div>

        <div class="col-md-4">
            <label for="inputCliente" class="form-label">Código do Cliente</label>
            <input type="text" class="form-control" name ="idClienteFK" id="inputCliente">
        </div>

        <div class="col-md-4">
            <label for="inputProduto" class="form-label">Código do Produto</label>
            <input type="text" class="form-control" name ="idProdutoFK" id="inputProduto">
        </div>
    
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>
</div>

<?php
include_once("footer.php");
?>