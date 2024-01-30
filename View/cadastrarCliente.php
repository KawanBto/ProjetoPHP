<?php
include_once("header.php");
?>

<div class="container">
    <form class="row g-3" method="Post" action="../controller/adicionarContato.php">
        <div class="col-md-6">
            <label for="inputNome" class="form-label">Nome</label>
            <input type="text" class="form-control" name ="nomeContato" id="inputNome">
        </div>

        <div class="col-md-2">
            <label for="inputFone" class="form-label">Fone</label>
            <input type="text" class="form-control"name = "foneContato" id="inputFone">
        </div>

        <div class="col-md-2">
            <label for="inputFone" class="form-label">Cep</label>
            <input type="text" class="form-control"name = "cepContato" id="inputCep">
        </div>

        <div class="col-md-2">
            <label for="inputFone" class="form-label">CPF</label>
            <input type="text" class="form-control"name = "cpfContato" id="inputCpf">
        </div>
    
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>
</div>

<?php
include_once("footer.php");
?>