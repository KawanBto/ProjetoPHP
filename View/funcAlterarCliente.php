<?php
include_once("header.php");
require_once("../model/conexao.php");
require_once("../model/bancodeconexao.php");      

extract($_REQUEST,EXTR_OVERWRITE);
$idContato = isset($idContato) ? $idContato : "";
if($idContato){
  $contatos = buscarContatoID($conexao,$idContato);
  
?>

<div class="container">
    <form class="row g-3" method="Post" action="../Controller/alterarContato.php">
    <input type="hidden" value= "<?php echo($contatos["idContato"]);?>" name ="idContato">
        <div class="col-md-3">
            <label for="inputNome" class="form-label">Nome</label>
            <input type="text" class="form-control" value= "<?php echo($contatos["nomeContato"]);?>" name ="nomeContato" id="inputNome">
        </div>

        <div class="col-md-3">
            <label for="inputFone" class="form-label">Fone</label>
            <input type="text" class="form-control" value= "<?php echo($contatos["foneContato"]);?>" name = "foneContato" id="inputFone">
        </div>

        <div class="col-md-3">
            <label for="inputNome" class="form-label">CEP</label>
            <input type="text" class="form-control" value= "<?php echo($contatos["cepContato"]);?>" name ="cepContato" id="inputCep">
        </div>

        <div class="col-md-3">
            <label for="inputFone" class="form-label">CPF</label>
            <input type="text" class="form-control" value= "<?php echo($contatos["cpfContato"]);?>" name = "cpfContato" id="inputCpf">
        </div>
    
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>
</div>

<?php
} else {
    echo ("Dados não encontrados");
}
include_once("footer.php");
?>